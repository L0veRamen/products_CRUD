<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', 'root123');

//check database connection
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//check id if exist
$id = $_GET['id'] ?? null;


//if id does not exist redirect to index.php
if (!$id) {
    header('Location: index.php');
    exit;
}

$statements = $pdo->prepare('SELECT * FROM products WHERE id =:id');
$statements->bindValue(':id', $id);
$statements->execute();


$product = $statements->fetch(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($product);
// echo '</pre>';
// exit;


//check input errors
$errors = [];

//when refresh create.php undefined variable title, description
$title = $product['title'];
$description = $product['description'];
$price = $product['price'];


// echo $_SERVER['REQUEST_METHOD'].'<br>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];



    if (!$title) {
        $errors[] = 'Product title is required';
    };

    if (!$price) {
        $errors[] = 'Product price is required';
    };

    // create a images folder inside the current folder
    if (!is_dir('images')) {
        mkdir('images');
    }


    if (empty($errors)) {
        //check if images folder exist
        $image = $_FILES['image'] ?? null;

        // old image path
        $imagePath = $product['image'];


        if ($image && $image['tmp_name']) {

            //delete old image if there is an old image
            if ($product['image']) {
                #remove images
                unlink($product['image']);
            }

            //create a unique path for images
            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];

            mkdir(dirname($imagePath));

            move_uploaded_file($image['tmp_name'], $imagePath);
        }




        $statements = $pdo->prepare("UPDATE products SET title =:title, image = :image , description = :description, price = :price where id = :id ");

        //bind parameters from sql statements
        $statements->bindValue(':title', $title);
        $statements->bindValue(':image', $imagePath);
        $statements->bindValue(':description', $description);
        $statements->bindValue(':price', $price);
        $statements->bindValue(':id', $id);


        $statements->execute();
        // after create new product, come back to main page index php
        header('Location: index.php');
    }
}

//create a randomstring function to name a upload folder
function randomString($n)
{

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}





?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">

    <link href="app.css" rel="stylesheet" />

    <title>Products CRUD</title>
</head>

<body>

    <p>
        <a href="index.php" class="btn btn-secondary">Go Back to Products</a>
    </p>
    <h1>Update Prodcuct <b><?php echo $product['title'] ?></b>
        <h1>

            <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error) : ?>
                        <div><?php echo $error ?></div>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>


            <form action="" method="post" enctype="multipart/form-data">
                <!-- if product have image display image -->
                <?php if ($product['image']) :  ?>
                    <img src="<?php echo $product['image'] ?>" class="update-image" alt="images">
                <?php endif; ?>



                <div class="form-group">
                    <label>Product Image</label>
                    <br>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Product Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $title ?>">
                </div>
                <div class="form-group">
                    <label>Product description</label>
                    <textarea class="form-control" name="description"><?php echo $description ?></textarea>
                </div>
                <div class="form-group">
                    <label>Product price</label>
                    <input type="number" step=".01" name="price" class="form-control" value="<?php echo $price ?>">
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <a class="btn btn-sm btn-primary" href="index.php" role="button">Cancel</a>
            </form>
</body>

</html>
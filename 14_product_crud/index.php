<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', 'root123');

//check database connection
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//check search 
$search = $_GET['search'] ?? '';
if ($search) {

  $statements = $pdo->prepare('SELECT * FROM products where title LIKE :title ORDER BY create_date DESC');
  $statements->bindValue(':title',"%$search%");

}else
{
  $statements = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');

}


$statements->execute();
$products = $statements->fetchAll(PDO::FETCH_ASSOC);
//display all data from database
// echo '<pre>';
// var_dump($products);
// echo '</pre>';

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
  <h1>Products CRUD</h1>

  <p>
    <a href="create.php" class="btn btn-success">Create Product</a>
  </p>

  <form>
        <!-- search button -->
  <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search for Products" name="search" value="<?php echo $search?>">
  <div class="input-group-append">
    <button class="btn btn-primary" type="submit">Search</button>
  </div>
</div>

  </form>


  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) : ?>
        <tr>
          <th scope="row"><?php echo $i + 1 ?></th>
          <td>

            <img src="<?php echo $product['image'] ?>" class="thumb-image" alt="images">

          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>

            <a href="update.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-primary">Edit</a>

            <form style="display:inline-block" method="post" action="delete.php" >
              <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
            </form>

          </td>

        </tr>
      <?php endforeach; ?>

  </table>

</body>

</html>
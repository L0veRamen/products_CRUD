<?php

$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', 'root123');

//check database connection
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




//check id if exist
$id = $_POST['id'] ?? null;


//if id does not exist redirect to index.php
if(!$id){
    header('Location: index.php');
    exit;
}

$statements = $pdo->prepare('DELETE FROM products where id =:id ');
$statements -> bindValue(':id',$id);
$statements->execute();

header("Location: index.php");

?>
<?php
require_once "Person.php";
require_once "Student.php";

// Create Person class in Person.php
$p = new Person('Jackson','Wang');
$p -> setAge(27);
echo $p ->getAge();
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// $p -> name = 'Jackson';
// $p -> surname = 'Wang';

echo '<pre>';
var_dump($p);
echo '</pre>';

echo Person::$counter;


// Create instance of Student

$stu = new Student("Jack","Capatin",123);
echo '<pre>';
var_dump($stu);
echo '</pre>';
// Using setter and getter


?>
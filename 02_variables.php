<?php

// What is a variable

// Variable types
/*
 * String
 * Integer
 * Float
 * Boolean
 * Null
 * Array
 * Object
 * Resource
 * */


// Declare variables
$name = 'LOL';
$age = 28;
$isMale = false; // convert to empty string
$salary = null; // convert to empty string
$height = 1.90;
// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $salary.'<br>';
echo $height.'<br>';

// Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isMale).'<br>';
echo gettype($salary).'<br>';
echo gettype($height).'<br>';

// Print the whole variable
var_dump($name,$height,$salary,$isMale,$age);
// Change the value of the variable
$name = false;
// Print type of the variable
echo gettype($name).'<br>';
// Variable checking functions
echo is_string($name);
echo is_int($age);
echo is_bool($isMale);
echo is_double($salary);

// Check if variable is defined
echo isset($name);
echo isset($address);
// Constants
const PI = 3.14;
echo PI;

// Using PHP built-in constants
echo SORT_ASC.'<br>';

?>
<?php

// Create array
$fruits = ['Banana','Apple','Orangle'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[1].'<br>';
// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';
// Check if array has element at index 2

echo isset($fruits[2]);

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array

echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'pear');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Add element at the beginning of the array
array_unshift($fruits, 'bar');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array

array_shift($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = "Banada,Apple,Peach";
echo '<pre>';
var_dump(explode(",",$string));
echo '</pre>';

// Combine array elements into string

echo implode(" & ",$fruits);

// Check if element exist in the array

echo '<pre>';
var_dump(in_array("Apple",$fruits));
echo '</pre>';


// Search element index in the array
echo '<pre>';
var_dump(array_search("Mango",$fruits));
echo '</pre>';

echo '<pre>';
var_dump(array_search("Apple",$fruits));
echo '</pre>';

// Merge two arrays
$vegs = ["Potato","cucumber","tomato"];

echo '<pre>';
// var_dump(array_merge($fruits,$vegs));
var_dump([...$fruits,...$vegs]);
echo '</pre>';


// Sorting of array (Reverse order also)

sort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

echo '<pre>';
print_r($person);
echo '</pre>';

// Get element by key
echo $person['name'].'<br>';
echo $person['surname'].'<br>';
echo $person['age'].'<br>';
// echo $person['hobbies'[0]].'<br>';

// Set element by key

$person['channel'] = 'Youtube';
echo '<pre>';
print_r($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
// if(!isset($person['address'])){
//     $person['address'] = 'unknown';
// }
// echo '<pre>';
// print_r($person);
// echo '</pre>';

$person['address'] ??= 'unknown';
echo '<pre>';
print_r($person);
echo '</pre>';

// Check if array has specific key
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';
// Print the keys of the array

echo '<pre>';
print_r(array_keys($person));
echo '</pre>';

// Print the values of the array

echo '<pre>';
print_r(array_values($person));
echo '</pre>';


// Sorting associative arrays by values, by keys
ksort($person);
echo '<pre>';
print_r($person);
echo '</pre>';
echo '<br>';
asort($person);
echo '<pre>';
print_r($person);
echo '</pre>';
// Two dimensional arrays
$todos = [
    ["title"=>'Todo title 1', 'completed'=> true],
    ["title"=>'Todo title 2', 'completed'=> false],
    ["title"=>'Todo title 3', 'completed'=> true],
];

echo '<pre>';
print_r($todos);
echo '</pre>';


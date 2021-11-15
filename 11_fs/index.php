<?php
// Magic constants
echo __DIR__."<br>";
echo __FILE__."<br>";
echo __LINE__."<br>";
// Create directory
// mkdir('test');

// Rename directory
// rename('test','test2');
// Delete directory
// rmdir('test2');
// Read files and folders inside directory
$file = scandir("../");
echo "<pre>";
var_dump($file);
echo "</pre>";

// file_get_contents, file_put_contents
// echo file_get_contents("lorem.text");
file_put_contents("sample.txt","some content");
// file_get_contents from URL
$userJson = file_get_contents("https://jsonplaceholder.typicode.com/users");
echo $userJson;

$users = json_decode($userJson);
echo '<pre>';
var_dump($users);
echo '</pre>';


// https://www.php.net/manual/en/book.filesystem.php


// file_exists
file_exists("sample.txt");
// is_dir
is_dir('test');
// filemtime

// filesize

// disk_free_space

// file


?>
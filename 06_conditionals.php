<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20){
    echo '1';
    echo '<br>';
}

// Without circle braces
if ($age === 20) echo '1';echo '<br>';


// Sample if-else
if ($age > 20){
    echo '1';
    echo '<br>';
}else{
    echo '2';
    echo '<br>';
}


// Difference between == and ===
if ($age === 20){
    echo '1';
    echo '<br>';
}
if($age == '20'){
    echo '2';
    echo '<br>';
}


// if AND
if($age > 20 || $salary === 300000){
    echo "Do something".'<br>';
}


// if OR



// Ternary if
echo $age < 22? 'Young':"old";


// Short ternary

$myAge = $age ?:18;

echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin';
switch($userRole){

    case 'admin':
        echo "admin";
        break;
    case 'editor':
        echo "editor";
        break;
    case 'user':
        echo "user";
        break;
    default:
        echo "Invalid role";    


}


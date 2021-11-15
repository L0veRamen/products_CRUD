<?php

// Function which prints "Hello I am Zura"
function hello($name){
    return  "Hello I am $name.";
}
echo hello("Jackson").'<br>';
echo hello("John").'<br>';
// Function with argument

// Create sum of two functions
function sum($a, $b){
    return $a+$b;
}
echo sum(2,3);
// Create function to sum all numbers using ...$nums
function sum2(...$nums){
    echo '<pre>';
    var_dump($nums);
    echo '</pre>';
}

echo sum2(1,2,3,4,5,6);
// Arrow functions

// function sum3(...$nums){
//     $sum = 0;
//     foreach($nums as $n){
//         $sum +=$n;
//     }
//     return $sum;
// }

function sum3(...$nums){
   return array_reduce($nums,fn($carry, $n)=> $carry + $n);
}
echo sum3(1,2,3,4,5,6);



?>
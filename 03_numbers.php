<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations
echo ($a + $b) * $c.'<br>';
echo ($a - $b) * $c.'<br>';
echo ($a * $b) * $c.'<br>';
echo ($a / $b) * $c.'<br>';
echo ($a % $b) * $c.'<br>';
// Assignment with math operators
$a += $b; echo $a.'<br>';

// Increment operator

echo $a++.'<br>';
echo ++$a.'<br>';

// Decrement operator

echo $a--.'<br>';
echo --$a.'<br>';

// Number checking functions
is_float(1.25);
is_double(1.25);
is_int(1.25);
is_numeric(1.25);


// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
var_dump($number);
echo '<br>';


// Number functions
echo "abs(-15)". abs(-15).'<br>';
echo "pow(-15,2)". pow(-15,2).'<br>';
echo "sqrt(15)". sqrt(15).'<br>';
echo "max(-15,10)". max(-15,10).'<br>';
echo "min(-15,10)". min(-15,10).'<br>';
echo "round(-15.9)". round(-15.9).'<br>';
echo "round(-15.2)". round(-15.2).'<br>';
echo "floor(-15.7)". floor(-15).'<br>';
echo "ceil(-15.2)". ceil(-15).'<br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number,2,'.',',');

// https://www.php.net/manual/en/ref.math.php

?>
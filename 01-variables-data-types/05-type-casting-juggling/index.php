<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

//Implicit conversion
$result = $number1 + $number2; //int 15
$result = $number1 + $number3; //int (string to int)25 
$result = $number3 + $number3; //int (string to int)40 
$result = $number1 . $number2; //string (string to int)"510" 

// $result = $fruit + $number1; //error
$result = $number1 + $bool1; //6 
$result = $number1 + $bool2; //5 
$result = $number1 + $null; //5 


//Explicit conversion
$result = (string)$number1; //int to string
$result = (int)$number3; // string to int
$result = (bool)$number1; //int to bool


var_dump($result)
?>
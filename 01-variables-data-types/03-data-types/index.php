<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

//String
$name = 'Ryan Azur';
$name2 = "Juan Dela Cruz";

//Display the value and type of $name - var_dump
var_dump($name);
echo '<br>';

//Display using gettype
echo gettype($name);
echo '<br>';

//echo both names
echo $name;
echo '<br>';
echo $name2;
echo '<br>';
echo '<br>';

//Integer
$age = 35;
echo $age;
echo '<br>';
var_dump($age);
echo '<br>';
echo '<br>';

//Float
$rating = 4.5;
var_dump($rating);
echo '<br>';
echo '<br>';

//Boolean
$is_loaded = true;
var_dump($is_loaded);
echo '<br>';
echo '<br>';

//Array
$friends = array('Lawrence', 'Justine', 'Vince', 54);
var_dump($friends); //will show the value and type
echo '<br>';
echo '<br>';
echo gettype($friends); //it will show the object type
echo '<br>';
echo '<br>';

//Null = theres just no value
$car = null;
var_dump($car);
echo '<br>';
echo '<br>';

//Resource
$file = fopen('sample.txt', 'r');
echo gettype($file);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
?>
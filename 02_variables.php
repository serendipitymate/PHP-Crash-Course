<?php
/*  ------------PHP Data Types ---------- */
/* 
- String            Series of character surrounded by quotes
- Integer           Whole Numbers
- Float             Decimal Numbers
- Boolean           true or false
- Array             Special variable, which can hold more than one value
-Object             A class
-NULL               Empty variable
-Resource           Special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad'; // String
$age = 40; // int
$has_Kids = true; // boolean
$cash_on_hand = 20.75; //float

//echo $name;
//var_dump ($cash_on_hand);
//var_dump ($has_Kids);

//echo $name . ' is ' .$age . ' years old';

//echo "$name is $age years old"; 

//echo "${name} is ${age} years old";

// $x = '5' +'5';
// var_dump($x);
// echo 10 - 5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;

define('HOST', 'localhost');
define ('DB_NAME', 'dev_db');

echo HOST;
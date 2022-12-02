<?php
//echo - Output strings, numbers, html, etc

//echo 123, 'Hello', 10.5;

//print - works like echo but can only take in single argument
//print 123;

//print_r() - Print single values and arrays
//print_r([1,2,3]);

//var_dump()- Returns more info like data type and lengthS
//var_dump('Hello');
//var_dump(true);

//var_export() - similar to var_dump(). Outputs a string representation of a variable
//var_export('hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Post One';?></h1>
    <h1><?='Post One';?></h1> //another way but prefer echo
</body>
</html>
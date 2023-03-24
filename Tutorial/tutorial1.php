<?php
    print ("Hello World!");
    // echo and print work as the same but print has value of 1
    // var_dump is print out what that output is 
    // We use variables here normally but we can use define
    // if we want to not change the variables

    $age = 30;
    define('NAME', 'Myo Min Khant');

    //string
    // in different strings we use double quotes instead
    // of single quotes because it can call variables
    $stringOne = "My email is ";
    $stringTwo = "stormfire873@gmail.com and $age";
    echo $stringOne . $stringTwo;

    // we use eacase string to avoid double quotes
    echo "The ninja says \"Whaaaa\" ";
    echo "The ninja says 'Whaaaa' ";

    // string function 
    echo strlen($stringOne). "</br>";
    echo str_replace('My' , 'Your' , $stringOne). "</br>";
    echo substr($stringOne , 6). "</br>";
    $str = "Hello World!";
    echo trim($str,"Hed!"). "</br>";
    echo rtrim($str,"World!"). "</br>";
    echo ltrim($str,"Hello"). "</br>";
    echo ucwords("hello world"). "</br>";
    echo ucfirst("hello world"). "</br>";

    // ------------------------------------------
    // number

    $radius = 25; //integer value
    $pi = 3.14; // float value

    // basic operations + - * / **
    // order of operations (B I D M A S)
    // bracket indecities division multiplation addition substration
    // short hand operator
    //$age = $age + 30;
    $age += 30;
    echo $age;

    // number function
    echo floor($pi);
    echo celi($pi);
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
  <h1><?php echo 'Hello World'; ?></h1>
  <h1><?php echo $age; ?></h1>
  <h1><?php echo NAME; ?></h1>
</body>
</html>
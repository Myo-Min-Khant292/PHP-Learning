<?php
  function sayHello($name = "MMK" , $time = "morning") {
    echo "Good $time $name";
  }

  sayHello("mario" , "night");

  function formatProduct($product) {
    //echo "{$product["name"]} costs $ {$product["price"]} to buy <br/> ";
    return "{$product["name"]} costs $ {$product["price"]} to buy <br/> ";
  };

  $formatted = formatProduct(['name' => 'Elden Ring' , 'price' => 60]);
  echo $formatted;

  //global variables
  $gf = "EK";

//  function mmkGF() {
//    global $gf;
//    echo "Myo Min Khant gf is $gf";
//  };
//
//  mmkGF();

  function mmkGF($gf) {
    $gf = "MTS <br/>";
    echo "Myo Min Khant gf is $gf <br/>";
  };

  mmkGF($gf);
  echo $gf;
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
  
</body>
</html>
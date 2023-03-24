<?php

    // indexed array
    $peopleOne = ['MMK' , 'EK'];
    $peopleTwo = ['ZMMA' , 'ZHA'];
    $ages = [10 , 20 , 30 , 40];
    //echo $peopleTwo[1]."</br>";

    // print readable array
    //print_r($ages)."</br>"; 

    // add new array 
    $ages[] = 50;
    array_push($ages , 60);
    //print_r($ages)."</br>"; 

    // combine array
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree)."</br>";

    // associate array (key & value)
    $ninjaOne = ['Shaun' => 'Ninja' , 'mario' => 'Orange'];
    $ninjaTwo = ['Browser' => 'Yellow' , 'Grape' => 'Green & Purple'];

    //echo $ninjaTwo['Grape']."</br>";
    //echo count($ninjaTwo)."</br>";

    // multi-dimensional array
    $blogs = [
        ["Rank" => 1 ,"Title" => "One Piece" , "Type" => "Adventure"],
        ["Rank" => 2 ,"Title" => "Gintama" ,"Type" => "Comedy"],
        ["Rank" => 3 ,"Title" => "Your Lie IN April" ,"Type" => "Drama"],
    ];

    

    //$popped = array_pop($blogs)."</br>";
    //print_r($popped)."</br>";
    //print_r($blogs)."</br>";
    var_dump($blogs)."</br>";
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
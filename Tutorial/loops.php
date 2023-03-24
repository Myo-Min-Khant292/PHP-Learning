<?php

  $lists = ["EK" , "MTS" , "SSH"];

  //// This is for loop method
  //for($i = 0; $i < count($lists) ; $i++) {
  //  echo $lists[$i]."</br>";
  //};

  // This is foreach method
  //foreach($lists as $list) {
  //  echo $list."</br>";
  //};

  $blogs = [
    ["Rank" => 1 ,"Title" => "One Piece" , "Type" => "Adventure"],
    ["Rank" => 2 ,"Title" => "Gintama" ,"Type" => "Comedy"],
    ["Rank" => 3 ,"Title" => "Your Lie IN April" ,"Type" => "Drama"],
  ];

  //foreach($blogs as $blog) {
  //  echo $blog["Rank"]. "-" . $blog["Title"];
  //  echo "</br>";
  //};

  // while loop
  $i = 0;
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
  <h1>Looping Using While Loop</h1>
  <ul>
    <?php while($i < count($blogs)) {?>
      <li>
        <?php echo $blogs[$i]["Rank"] . "-"; ?>
        <?php echo $blogs[$i]["Title"] . "</br>"; ?>
        <?php $i++; ?>
      </li>
    <?php } ?>
  </ul>
</body>
</html>
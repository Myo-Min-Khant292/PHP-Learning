<?php
  $price = -10;

  if ($price < 20) {
    echo 'Price is less than 20'. '<br />';
  }elseif ($price == 20) {
    echo 'Price is equal to 20'. '<br />';
  }else {
    echo 'Price is greater than 20'. '<br />';
  }

  $products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

  foreach($products as $product){

    if($product['price'] > 30 ) {
      break;
    } 

		// if($product['price'] < 15 && $product['price'] > 2){
		// 	echo $product['name'] . '<br />';
		// }

		// if($product['price'] > 20 || $product['price'] < 10){
		// 	echo $product['name'] . '<br />';
		// }
    echo $product['name'] . '<br />';
	}
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
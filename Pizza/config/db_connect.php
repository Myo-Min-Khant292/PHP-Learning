<?php 

  //connect to database
  $conn = mysqli_connect("localhost" , "root" , "1234" , "ninja_pizza");

  //check connection
  if(!$conn) {
    echo 'Connection failed' . mysqli_connect_error();
  }

?>
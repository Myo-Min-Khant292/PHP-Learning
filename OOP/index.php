<?php
  
  class User {
    public $name;
    protected $email;
    public $role = "member";

    public function __construct($name , $email) {
      $this->name = $name;
      $this->email = $email;
    }

    public function addFriend() {
      return "Some random is $this->name ginger";
    }

    public function getMessage() {
      echo "$this->email ($this->role) is send you a message";
    }

    //getters
    public function getEmail() {
      return $this->email;
    }

    //setters
    public function setEmail($email) {
      if(strpos($email, '@') > -1) {
        $this->email = $email;
      }else {
        echo 'wrong method';
      }
    }
  }

  class AdminUser extends User {
    public $level;
    public $role = "admin";
     
    public function __construct($name , $email , $level) {
      $this->level = $level;
      parent::__construct($name, $email);
    }
  } 

  $userOne = new User('mario' , 'mario@example.com');
  $userTwo = new User('luigi' , 'luigi@example.com');
  $userThree = new AdminUser('ginger' , 'ginger@example.com' , 5);

  echo $userOne->name . "</br>";
  echo $userOne->setEmail("randomtext@gmail.com") . "</br>";
  echo $userOne->getEmail() . "</br>";
  //echo $userOne->addFriend() . "</br>";

  //$userTwo->name = "EK" ;
  //$userTwo->email = "blublub@gmail.com" ;
  //$userTwo->addFriend() ;

  echo $userTwo->name . "</br>";
  echo $userTwo->getEmail() . "</br>";
  echo $userTwo->getMessage() . "</br>";
  //echo $userTwo->addFriend() . "</br>";

  echo $userThree->name . "</br>";
  echo $userThree->level . "</br>";
  echo $userThree->getEmail() . "</br>";
  echo $userThree->getMessage() . "</br>";
  echo $userThree->addFriend() . "</br>";

  echo get_class($userOne);

  // static is used if we want to call class methods directly
  class Weather {

    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celsiusToFarenheit($c){
      return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
        return self::$tempConditions[0];
      } elseif($f < 70){
        return self::$tempConditions[1];
      } else {
        return self::$tempConditions[2];
      }
    }

  }

  //print_r(Weather::$tempConditions);
  //echo Weather::celsiusToFarenheit(20);
  echo Weather::determineTempCondition(80);

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
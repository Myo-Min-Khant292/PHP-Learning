<?php
  // ternary operator
  $score = 50;

  //if ($score > 40) {
  //  echo 'High score';
  //}else {
  //  echo 'Low score';
  //};

  echo $score > 40 ? 'High score' : 'Low score'. '<br />';

  // SuperGlobals

	//$_GET['name'], $_POST['name']

	//echo $_SERVER['SERVER_NAME'] . '<br />';
	//echo $_SERVER['REQUEST_METHOD'] . '<br />';
	//echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	//echo $_SERVER['PHP_SELF'] . '<br />';

  // sessions and cookies
  if (isset($_POST['send'])) {

    // cookies for gender
    setcookie('gender', $_POST['gender'] , time() + 10);

    session_start();

    $_SESSION['name'] = $_POST['name'];
    
    header('Location: index.php');
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name">
    <select name='gender'>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <input type="submit" name="send" value="send">
  </form>
</body>
</html>
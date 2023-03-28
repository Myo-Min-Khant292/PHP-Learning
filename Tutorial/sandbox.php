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

	echo $_SERVER['SERVER_NAME'] . '<br />';
	echo $_SERVER['REQUEST_METHOD'] . '<br />';
	echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
	echo $_SERVER['PHP_SELF'] . '<br />';


?>
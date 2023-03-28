<?php
  //$quotes = readfile('readme.txt');
  //echo  $quotes;

  $file = 'test.txt';

  //if(file_exists($file)) {

    // read file
    //echo readfile($file).'</br>';

    // copy file
    //copy($file , 'quotes.txt');

    // absolute path
    //echo realpath($file). '</br>';

    // file size
    //echo filesize($file). '</br>';

    // rename file
    //rename($file, 'test.txt');
  //} else {
  //  echo 'does not exist';
  //}

  // mkdir
  //mkdir('quotes');

  // ----- file system -part 2

  // opening a file for reading
	// $handle = fopen($file, 'a+');

	// read the file
	// echo fread($handle, filesize($file));
	// echo fread($handle, 112);

	// read a single line
	// echo fgets($handle);
	// echo fgets($handle);

	// read a single character
	// echo fgetc($handle);
	// echo fgetc($handle);

	// $handle = fopen($file, 'r+');
	// $handle = fopen($file, 'a+');

	// writing to a file
	// fwrite($handle, "\nEverything popular is wrong.");

	// fclose($file);	

	unlink($file);
?>
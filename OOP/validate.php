<?php
  if(isset($_POST['submit'])) {
    echo "form submit";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
    <div class="new-user">
      <h2>Create a new user</h2>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <label>username: </label>
        <input type="text" name="username">

        <label>email: </label>
        <input type="text" name="email">

        <input type="submit" value="submit" name="submit">

      </form>
    </div>
</body>
</html>
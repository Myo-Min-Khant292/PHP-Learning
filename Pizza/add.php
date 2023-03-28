<?php 

    include("config/db_connect.php");

    // between get and post methods is 
    // get method shows return in url 
    // post method dose not shows return in url
    $errors = ["email" => '' , "title" => '' , "ingredients" => '' ];
    $email = $title = $ingredients = "";

    if (isset($_POST['submit'])) {

        //check email
        if (empty($_POST['email'])) {
            $errors["email"] = "You need to enter a email address";
        } else {
            $email =  $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors["email"] = "You need to enter a valid email address";
            }else {
                echo htmlspecialchars($_POST['email']);
            }
            
        }

        //check title
        if (empty($_POST['title'])) {
            $errors["title"] = "You need to enter a title for pizza" . "<br/>";
        } else {

            $title = $_POST['title'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors["title"] = 'Title must be letters and spaces only';
			}else {
                echo htmlspecialchars($_POST['title']) . "<br/>";
            }
            
        }

        //check ingredients
        if (empty($_POST['ingredients'])) {
            $errors["ingredients"] = "You need to enter some ingredients" . "<br/>";
        } else {
            $ingredients = $_POST['ingredients'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
				$errors["ingredients"] = 'Ingredients must be a comma separated list';
			}else {
                echo htmlspecialchars($_POST['ingredients']) . "<br/>";
            }
        }

        if(array_filter($errors)) {
            echo 'Change the error first';
        }else {
            $email = mysqli_real_escape_string($conn , $_POST['email']);
            $title = mysqli_real_escape_string($conn , $_POST['title']);
            $ingredients = mysqli_real_escape_string($conn , $_POST['ingredients']);

            // Create sql
            $sql = "INSERT INTO pizzas(email, title, ingredients) VALUES('$email', '$title' , '$ingredients')";

            // save to database and check
            if(mysqli_query($conn , $sql)) {
                //success
                header('Location: index.php');
            }else {
                //error
                echo 'query error' . mysqli_error($conn);
            }
           
        }
        //end of post check
    }

?>

<!DOCTYPE html>
<html>
	
  <?php include('Template/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Pizza</h4>
		<form class="white" action="add.php" method="POST">
			<label>Your Email</label>
			<input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <div class="red-text"><?php echo $errors['email']; ?></div>
			<label>Pizza Title</label>
			<input type="text" name="title" value="<?php echo htmlspecialchars($_POST['title']); ?>">
            <div class="red-text"><?php echo $errors['title']; ?></div>
			<label>Ingredients (comma separated)</label>
			<input type="text" name="ingredients" value="<?php echo htmlspecialchars($_POST['ingredients']); ?>">
            <div class="red-text"><?php echo $errors['ingredients']; ?></div>
			<div class="center">
				<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('Template/footer.php'); ?>

</html>
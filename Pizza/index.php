<?php

  include("config/db_connect.php");

  // write query for all pizzas
  $sql = "SELECT title , ingredients , email , id FROM pizzas ORDER BY id";
 
  // make query & get results
  $results = mysqli_query($conn , $sql);

  // fetch the resulting row as an array
  $pizzas = mysqli_fetch_all($results , MYSQLI_ASSOC);

  // free results from memory
  mysqli_free_result($results);

  // close connection
  mysqli_close($conn);

  echo $pizzas[0]['email'];

?>

<!DOCTYPE html>
<html lang="en">
  <?php include('Template/header.php'); ?>

  <h4 class="center grey-text"> Pizzas! </h4>

  <div class='container'>
    <div class='row'>
      <?php foreach($pizzas as $pizza) : ?>
        <div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul>
                <?php foreach(explode(',' , $pizza['ingredients']) as $ing) : ?>
                  <li><?php echo htmlspecialchars($ing)?></li>
                <?php endforeach; ?>
              </ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="detail.php?id=<?php echo $pizza['id']; ?>">more info</a>
						</div>
					</div>
				</div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php include('Template/footer.php'); ?>
</html>
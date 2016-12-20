<?php include "header.php"; ?>
<?php
  include "pull.php";
  $theMovies = Pull::allMovies();
?>
<?php foreach ($theMovies as $movie){ ?>
  <h2><?php echo $movie['movieName']; ?></h2>
  <a class="btn btn-success" href="update_movie.php?id=<?php echo $movie['movieid'];?>">Update</a>
  <a class="btn btn-danger" href="delete_movie.php?id=<?php echo $movie['movieid'];?>">Delete</a>
<?php } ?>
<?php include "footer.php" ?>

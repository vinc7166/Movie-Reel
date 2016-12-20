<?php include "header.php"; ?>
<?php
  include "pull.php";
  $theMovies = Pull::allMovies();
?>
<?php foreach ($theMovies as $movie){ ?>
  <a href="details.php?id=<?php echo $movie['movieid'];?>"><h2><?php echo $movie['movieName']; ?></h2></a>
<?php } ?>
<?php include "footer.php" ?>

<?php include "header.php"; ?>
<?php
  include "pull.php";
  $theActors = Pull::allActors();
?>
<?php foreach ($theActors as $movie){ ?>
  <h2><?php echo $movie['actorName']; ?></h2>
  <a class="btn btn-success" href="update_actor.php?id=<?php echo $movie['actorid'];?>">Update</a>
  <a class="btn btn-danger" href="delete_actor.php?id=<?php echo $movie['actorid'];?>">Delete</a>
<?php } ?>
<?php include "footer.php" ?>

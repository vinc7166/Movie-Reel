<?php include "header.php"; ?>
<?php
  include "pull.php";
  $theStudios = Pull::allStudios();
?>
<?php foreach ($theStudios as $movie){ ?>
  <h2><?php echo $movie['studioName']; ?></h2>
  <a class="btn btn-success" href="update_studio.php?id=<?php echo $movie['studioid'];?>">Update</a>
  <a class="btn btn-danger" href="delete_studio.php?id=<?php echo $movie['studioid'];?>">Delete</a>
<?php } ?>
<?php include "footer.php" ?>

<?php include "header.php"; ?>
<?php
  include "pull.php";
  $theDirectors = Pull::allDirectors();
?>
<?php foreach ($theDirectors as $movie){ ?>
  <h2><?php echo $movie['directorName']; ?></h2>
  <a class="btn btn-success" href="update_director.php?id=<?php echo $movie['directorid'];?>">Update</a>
  <a class="btn btn-danger" href="delete_director.php?id=<?php echo $movie['directorid'];?>">Delete</a>
<?php } ?>
<?php include "footer.php" ?>

<?php include "header.php"; ?>
<?php
  include "pull.php";
  $theKeys = Pull::allKeywords();
?>
<?php foreach ($theKeys as $movie){ ?>
  <h2><?php echo $movie['keywordName']; ?></h2>
  <a class="btn btn-success" href="update_key.php?id=<?php echo $movie['keywordid'];?>">Update</a>
  <a class="btn btn-danger" href="delete_key.php?id=<?php echo $movie['keywordid'];?>">Delete</a>
<?php } ?>
<?php include "footer.php" ?>

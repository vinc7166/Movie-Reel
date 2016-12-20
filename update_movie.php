<?php
include "header.php";
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("SELECT mid, mname FROM movies where mid = ?");
$stmt->bind_param("s",$_GET['id']);
$stmt->execute();
$stmt->bind_result($mid, $mname);
$stmt->fetch();
?>

<form role="form" action="update_movieP2.php">
  <div class="form-group">
    <label for="movieName">Name:</label>
    <input type="text" class="form-control" name="movieName" value="<?php echo $mname?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="movieid" value="<?php echo $mid?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

<?php
include "header.php";
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("SELECT did, dname FROM director where mid = ?");
$stmt->bind_param("s",$_GET['id']);
$stmt->execute();
$stmt->bind_result($mid, $mname);
$stmt->fetch();
?>

<form role="form" action="update_directorP2.php">
  <div class="form-group">
    <label for="directorName">Name:</label>
    <input type="text" class="form-control" name="directorName" value="<?php echo $mname?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="directorid" value="<?php echo $mid?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

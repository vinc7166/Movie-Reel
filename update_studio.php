<?php
include "header.php";
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("SELECT sid, sname FROM studios where sid = ?");
$stmt->bind_param("s",$_GET['id']);
$stmt->execute();
$stmt->bind_result($mid, $mname);
$stmt->fetch();
?>

<form role="form" action="update_studioP2.php">
  <div class="form-group">
    <label for="studioName">Name:</label>
    <input type="text" class="form-control" name="studioName" value="<?php echo $mname?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="studioid" value="<?php echo $mid?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

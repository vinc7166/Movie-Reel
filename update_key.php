<?php
include "header.php";
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("SELECT kid, kname FROM keywords where kid = ?");
$stmt->bind_param("s",$_GET['id']);
$stmt->execute();
$stmt->bind_result($mid, $mname);
$stmt->fetch();
?>

<form role="form" action="update_keyP2.php">
  <div class="form-group">
    <label for="keywordName">Name:</label>
    <input type="text" class="form-control" name="keywordName" value="<?php echo $mname?>">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" name="keywordid" value="<?php echo $mid?>">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

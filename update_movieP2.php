<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare(
  "UPDATE movies SET mid=?, mname=?
    WHERE mid = ?"
);
$stmt->bind_param('sss',$_GET["movieid"],$_GET["movieName"],$_GET["movieid"]);
$stmt->execute();
header('Location: index.php');
 ?>

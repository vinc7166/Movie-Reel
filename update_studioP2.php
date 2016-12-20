<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare(
  "UPDATE studios SET sid=?, sname=?
    WHERE sid = ?"
);
$stmt->bind_param('sss',$_GET["studioid"],$_GET["studioName"],$_GET["studioid"]);
$stmt->execute();
header('Location: index.php');
 ?>

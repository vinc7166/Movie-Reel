<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare(
  "UPDATE directors SET did=?, dname=?
    WHERE did = ?"
);
$stmt->bind_param('sss',$_GET["directorid"],$_GET["directorName"],$_GET["directorid"]);
$stmt->execute();
header('Location: index.php');
 ?>

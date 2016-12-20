<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare(
  "UPDATE actors SET aid=?, aname=?
    WHERE aid = ?"
);
$stmt->bind_param('sss',$_GET["actorid"],$_GET["actorName"],$_GET["actorid"]);
$stmt->execute();
header('Location: index.php');
 ?>

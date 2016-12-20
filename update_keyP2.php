<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare(
  "UPDATE keywords SET kid=?, kname=?
    WHERE kid = ?"
);
$stmt->bind_param('sss',$_GET["keywordid"],$_GET["keywordName"],$_GET["keywordid"]);
$stmt->execute();
header('Location: index.php');
 ?>

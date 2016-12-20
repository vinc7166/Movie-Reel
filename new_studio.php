<?php
include 'DB.php';

$conn = DB::connect();
$stmt = $conn->prepare(
  "INSERT INTO moviereel.studios
    (sid, sname)
  VALUES
    (?,?)"
);
$stmt->bind_param(
  "ss",
  $_GET["studioid"],
  $_GET["studioName"]
);

$stmt->execute();

header('Location: index.php');
 ?>

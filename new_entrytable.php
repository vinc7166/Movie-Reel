<?php
include 'DB.php';

$conn = DB::connect();
$stmt = $conn->prepare(
  "INSERT INTO moviereel.entrytable
    (movieid, actorid, directorid, studioid, keywordid)
  VALUES
    (?,?,?,?,?)"
);
$stmt->bind_param(
  "sssss",
  $_GET["movieid"],
  $_GET["actorid"],
  $_GET["directorid"],
  $_GET["studioid"],
  $_GET["keywordid"]
);

$stmt->execute();

header('Location: index.php');
 ?>

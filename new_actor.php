<?php
include 'DB.php';

$conn = DB::connect();
$stmt = $conn->prepare(
  "INSERT INTO moviereel.actors
    (aid, aname)
  VALUES
    (?,?)"
);
$stmt->bind_param(
  "ss",
  $_GET["actorid"],
  $_GET["actorName"]
);

$stmt->execute();

header('Location: index.php');
 ?>

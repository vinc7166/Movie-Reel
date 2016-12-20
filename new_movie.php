<?php
include 'DB.php';

$conn = DB::connect();
$stmt = $conn->prepare(
  "INSERT INTO moviereel.movies
    (mid, mname)
  VALUES
    (?,?)"
);
$stmt->bind_param(
  "ss",
  $_GET["movieid"],
  $_GET["movieName"]
);

$stmt->execute();

header('Location: index.php');
 ?>

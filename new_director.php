<?php
include 'DB.php';

$conn = DB::connect();
$stmt = $conn->prepare(
  "INSERT INTO moviereel.directors
    (did, dname)
  VALUES
    (?,?)"
);
$stmt->bind_param(
  "ss",
  $_GET["directorid"],
  $_GET["directorName"]
);

$stmt->execute();

header('Location: index.php');
 ?>

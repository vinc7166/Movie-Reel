<?php
include 'DB.php';

$conn = DB::connect();
$stmt = $conn->prepare(
  "INSERT INTO moviereel.keywords
    (kid, kname)
  VALUES
    (?,?)"
);
$stmt->bind_param(
  "ss",
  $_GET["keyid"],
  $_GET["keyName"]
);

$stmt->execute();

header('Location: index.php');
 ?>

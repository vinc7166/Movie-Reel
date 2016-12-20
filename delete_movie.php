<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("DELETE FROM entrytable where movieid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM movies where mid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();
header('Location: index.php');
 ?>

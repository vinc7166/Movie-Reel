<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("DELETE FROM entrytable where actorid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM actors where aid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();
header('Location: index.php');
 ?>

<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("DELETE FROM entrytable where directorid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM directors where did = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();
header('Location: index.php');
 ?>

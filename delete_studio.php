<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("DELETE FROM entrytable where studioid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM studios where sid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();
header('Location: index.php');
 ?>

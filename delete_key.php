<?php
include "DB.php";
$conn = DB::connect();
$stmt = $conn->prepare("DELETE FROM entrytable where keywordid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM keywords where kid = ?");
$stmt->bind_param("s", $_GET['id']);
$stmt->execute();
header('Location: index.php');
 ?>

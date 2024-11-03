<?php
include 'dbconnect.php';

$id = $_GET['id'];
$query = "DELETE FROM addnotice WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();

header('Location: notice.php');
exit();
?>

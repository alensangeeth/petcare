<?php
include 'dbconnect.php';

$id = $_GET['id'];
$query = "DELETE FROM service WHERE id = $id";
$result = $conn->query($query);
echo "<script>window.location.href = 'doctor.php';</script>";

?>
<?php
include 'dbconnect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$gender =$_POST['gender'];
$password = $_POST['password']; 
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$pet_name = $_POST['pet-name'];
$pet_type = $_POST['pet-type'];
$pet_weight = $_POST['pet-weight']; 


$query = "UPDATE register 
          SET name = '$name', email = '$email', gender = '$gender', password = '$password', phone = '$phone',
              address = '$address', city = '$city', pet_name = '$pet_name', pet_type = '$pet_type', pet_weight = '$pet_weight'
          WHERE email = '$email'";



if (mysqli_query($conn, $query))
{
    echo "<script language='javascript'>alert('Profile updated successfully');window.location.replace('profile.php');</script>";
}
 else 
{
    echo "Error updating profile";
}
?>

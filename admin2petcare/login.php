<?php
session_start();

$conn = new mysqli("localhost","root","","petcare");
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from adminlogin where username='$username' and password='$password'";
 $res=mysqli_query($conn,$query);
if($row=(mysqli_fetch_array($res)))
{
        header("Location: index.html");

    } 
?>
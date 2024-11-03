<?php
include "dbconnect.php";

$petname = $_POST['petname'];
$breed = $_POST['breed'];
$weight = $_POST['weight'];
$age = $_POST['age'];
$description = $_POST['description'];
$rate = $_POST['rate'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$useraddress = $_POST['useraddress'];
$userphone = $_POST['userphone'];
$userdescription = $_POST['userdescription'];


$sql = "INSERT INTO book (petname, breed, weight, age, description, rate, name, phone,address, email, useraddress,userphone, userdescription) 
VALUES ('$petname', '$breed', '$weight', '$age', '$description', '$rate', '$name', '$phone', '$address', '$email', '$useraddress', '$userphone', '$userdescription')";
$result=mysqli_query($conn,$sql);

if($result){

?>

<script language="javascript">alert('Order success Please Wait the Conformation ');window.location.replace('petview.php');
</script>

<?php
}
else{
echo "error";
}


?>

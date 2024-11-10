<?php
include "dbconnect.php";

$petname = $_POST['petname'];
$breed = $_POST['breed'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sql = "INSERT INTO book (petname, breed, name, email, userphone) 
VALUES ('$petname', '$breed', '$name', '$email', '$phone')";
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

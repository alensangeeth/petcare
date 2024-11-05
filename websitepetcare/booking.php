<?php
include "dbconnect.php";

$petname = $_POST['petname'];
$breed = $_POST['breed'];
$service = $_POST['service'];
$name = $_POST['name'];
$email = $_POST['email'];
$useraddress = $_POST['useraddress'];
$userphone = $_POST['userphone'];



$sql = "INSERT INTO servicebook (petname, breed, service, name, email, useraddress,userphone) 
VALUES ('$petname', '$breed', '$service', '$name', '$email', '$useraddress', '$userphone')";
$result=mysqli_query($conn,$sql);

if($result){

?>

<script language="javascript">alert('Order success Please Wait the Conformation ');window.location.replace('service.php');
</script>

<?php
}
else{
echo "error";
}


?>

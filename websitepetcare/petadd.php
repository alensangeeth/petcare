<?php
$conn=new mysqli("localhost","root","","petcare");

    $petname = $_POST['petname'];
    $useremail = $_POST['email'];
    $breed = $_POST['breed'];
    $weight = $_POST['weight'];
    $age = $_POST['age'];
    $description = $_POST['description'];
    $rate = $_POST['rate'];
   $image = '';


  
   if (isset($_FILES['image'])) {
    $uploadDir = "uploads/";
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $uploadPath = $uploadDir . $fileName;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($fileTmpPath, $uploadPath)) {
        $image = $uploadPath;
        
    } else {
        echo "Failed to upload image.";
    }
 } else {
    echo "No file uploaded.";
}


$sql = "INSERT INTO userpet (petname, useremail, breed, weight, rate, age, description, image) 
VALUES ('$petname','$useremail','$breed','$weight','$rate','$age' ,'$description', '$image')";

 $result=mysqli_query($conn,$sql);

if($result){
?>
<script language="javascript">alert(' Add success');window.location.replace('petadduser.php');
</script>
<?php
}
else{
?>
<script language="javascript">alert('failed to add');window.location.replace('petadd.html');
</script>
<?php

}

?>
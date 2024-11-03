<?php
$conn=new mysqli("localhost","root","","petcare");


    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender =$_POST['gender'];
    $password = $_POST['password']; 
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pet_name = $_POST['pet-name'];
    $pet_weight = $_POST['pet-weight']; 


    $qemail="SELECT * from register where email='$email'";
    $res=mysqli_query($conn, $qemail);
  
    if($row=mysqli_fetch_array(result: ($res))){
        ?>
        
    <script language="javascript">alert('email id already exist');window.location.replace('register.html');
    </script>
    <?php
    
    }
    else
    {

        echo "ggg";
         $sql = "INSERT INTO register (name, email, gender, password, phone, address, city, pet_name,pet_weight) 
        VALUES ('$name', '$email', '$gender', '$password', '$phone', '$address', '$city', '$pet_name', '$pet_weight')";
 echo $sql;
mysqli_query($conn,$sql);
?>

<script language="javascript">alert('registration success');window.location.replace('index.html');
    </script>
<?php

    }

?>
    
    
    

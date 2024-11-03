<?php
$conn=new mysqli("localhost","root","","petcare");


    $name = $_POST['name'];
    $department = $_POST['department'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $time = $_POST['time'];
    $date = $_POST['date'];
    $fees = $_POST['fees'];
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


    $sql = "INSERT INTO doctor (name, department, qualification, experience, time, date, fees, image) VALUES ('$name', '$department', '$qualification', '$experience', '$time', '$date', '$fees','$image')";
    
    $result = mysqli_query($conn, $sql);


    if ($result) {
        echo "<script>alert('Add success'); window.location.replace('doctor.php');</script>";
    } else {
        echo "<script>alert('Failed to add'); window.location.replace('doctoradd.php');</script>";
    }
    ?>

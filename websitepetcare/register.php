<?php
// Database connection
session_start();
$con = new mysqli("localhost", "root", "", "petcare");

// Check for connection error
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pincode = isset($_POST['pincode']) ? $_POST['pincode'] : ''; // Check if 'pincode' is set
    $pet_name = $_POST['pet_name'];
    $pet_type = $_POST['pet_type'];
    $pet_age = $_POST['pet_age'];
    $pet_weight = $_POST['pet_weight'];
    $created_at = date("Y-m-d H:i:s");

    // Handling pet photo upload
    $pet_photo = $_FILES['pet_photo']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($pet_photo);
    move_uploaded_file($_FILES['pet_photo']['tmp_name'], $target_file);

    // Check if email already exists
    $email_check_query = "SELECT * FROM register WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $email_check_query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script language='javascript'>alert('Email ID already exists');window.location.replace('register.html');</script>";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO register (name, email, gender, password, phone, address, state, city, country, pincode, pet_name, pet_type, pet_age, pet_weight, pet_photo, created_at) 
                VALUES ('$name', '$email', '$gender', '$password', '$phone', '$address', '$state', '$city', '$country', '$pincode', '$pet_name', '$pet_type', '$pet_age', '$pet_weight', '$target_file', '$created_at')";

        if (mysqli_query($con, $sql)) {
            // Login after successful registration
            $login_query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
            $result = mysqli_query($con, $login_query);

            if ($row = mysqli_fetch_array($result)) {
                $_SESSION['logged'] = $email;
                echo "<script language='javascript'>alert('Login success');window.location.replace('home.php');</script>";
            } else {
                echo "<script language='javascript'>alert('Login failed. Please try again.');window.location.replace('register.html');</script>";
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
    }

    mysqli_close($con);
}
?>

<?php
include "dbconnect.php";
session_start();

$email = $_SESSION['logged'];

// Default values
$petname = $breed = '';
$service = '';
$name = $phone = '';

// Fetch pet details
$query = "SELECT petname, breed FROM userpet WHERE useremail='$email'";
$result = $conn->query($query);
if ($result && $row = $result->fetch_assoc()) {
    $petname = $row['petname'];
    $breed = $row['breed'];
}

// Fetch user details
$query = "SELECT name, email, phone FROM register WHERE email='$email'";
$result = $conn->query($query);
if ($result && $row = $result->fetch_assoc()) {
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
}

?>

<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Service Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Including all styles from your original file -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/book.css">
</head>

<body>
    <div class="form-container">
        <h1>Service Booking Form</h1>
        <form action="booking.php" method="POST">
            <h3>Pet Details</h3>
            <div class="form-group">
                <label>Pet Name</label>
                <input type="text" name="petname" value="<?php echo htmlspecialchars($petname); ?>" required>
            </div>
            <div class="form-group">
                <label>Breed</label>
                <select name="breed" required>
                    <option value="Labrador Retriever" <?php echo ($breed == 'Labrador Retriever') ? 'selected' : ''; ?>>Labrador Retriever</option>
                    <option value="Beagle" <?php echo ($breed == 'Beagle') ? 'selected' : ''; ?>>Beagle</option>
                    <option value="Persian Cat" <?php echo ($breed == 'Persian Cat') ? 'selected' : ''; ?>>Persian Cat</option>
                    <option value="Companion Parrot" <?php echo ($breed == 'Companion Parrot') ? 'selected' : ''; ?>>Companion Parrot</option>
                </select>
            </div>
            
            <div class="form-group">
            <label>Service</label>
                <select name="service">
                    <option value="Grooming"<?php echo ($service== 'Grooming') ? ' selected' : ''; ?>>Grooming</option>
                    <option value="Pet Boarding"<?php echo ($service == 'Pet Boarding') ? ' selected' : ''; ?>>Pet Boarding</option>
                    <option value="Pet Vaccination"<?php echo ($service == 'Pet Vaccination') ? ' selected' : ''; ?>>Pet Vaccination</option>
                    
                </select>

            </div>

            <h3>User Details</h3>
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" >
            </div>
            <div class="form-group">
                <label>Your Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" >
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" name="phone" value="<?php echo htmlspecialchars($phone); ?>" >
            </div>
            
            <div class="form-group">
                <button type="submit" class="button">Book Service</button>
            </div>
        </form>
    </div>
</body>
</html>

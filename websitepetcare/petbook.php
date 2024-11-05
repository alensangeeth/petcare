<?php
include "dbconnect.php";
session_start();

$email = $_SESSION['logged'];

// Default values to avoid warnings if query fails
$petname = $age = $breed = $rate = $description = $weight = '';
$name = $email = $phone = $address = '';

// Fetching pet details
$query = "SELECT * FROM userpet WHERE useremail='$email'";
$result = $conn->query($query);

if ($result && $row = mysqli_fetch_array($result)) {
    $petname = $row['petname'];
    $age = $row['age'];
    $breed = $row['breed'];
    $rate = $row['rate'];
    $description = $row['description'];
    $weight = $row['weight'];
}

// Fetching user details
$query = "SELECT * FROM register WHERE email='$email'";
$result = $conn->query($query);

if ($result && $row = mysqli_fetch_array($result)) {
    $name = $row['name'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
}

?>

<!doctype html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pet Booking Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <h2>Pet Booking Form</h2>
        <form action="book.php" method="POST">
            <h3>Pet Details</h3>
            <div class="form-group">
                <label>Pet Name</label>
                <input type="text" name="petname" value="<?php echo htmlspecialchars($petname); ?>">
            </div>
            <div class="form-group">
                <label>Breed</label>
                <select name="breed">
                    <option value="Labrador Retriever"<?php echo ($breed == 'Labrador Retriever') ? ' selected' : ''; ?>>Labrador Retriever</option>
                    <option value="Beagle"<?php echo ($breed == 'Beagle') ? ' selected' : ''; ?>>Beagle</option>
                    <option value="Persian Cat"<?php echo ($breed == 'Persian Cat') ? ' selected' : ''; ?>>Persian Cat</option>
                    <option value="Companion Parrot"<?php echo ($breed == 'Companion Parrot') ? ' selected' : ''; ?>>Companion Parrot</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pet Age</label>
                <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>">
            </div>
            <div class="form-group">
                <label>Pet Weight</label>
                <input type="text" name="weight" value="<?php echo htmlspecialchars($weight); ?>">
            </div>
            <div class="form-group">
                <label>Pet Rate</label>
                <input type="text" name="rate" value="<?php echo htmlspecialchars($rate); ?>">
            </div>
            <div class="form-group">
                <label>About Pet</label>
                <input type="text" name="description" value="<?php echo htmlspecialchars($description); ?>">
            </div>

            <h3>User Details</h3>
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>
            <div class="form-group">
                <label>Your Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
            </div>

            <h3>Booking Information</h3>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" name="userphone" required>
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea name="useraddress" rows="4" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
                <label>Additional Information</label>
                <textarea name="userdescription" rows="4" placeholder="Any additional requests or information about the booking..."></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="button">Book Pet</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include "dbconnect.php";
session_start();


if (isset($_SESSION['logged'])) 
{
    $em = $_SESSION['logged'];
    
    $query = "SELECT * FROM register WHERE email='$em'";
    $result = mysqli_query($conn, $query);
    
    if ($result && $result->num_rows > 0) {
        $row = $result -> fetch_assoc();
        $name = $row['name'];
        $gender = $row['gender'];
        $password = $row['password']; 
        $phone = $row['phone'];
        $address = $row['address'];
        $city = $row['city'];
        $pet_name = $row['pet_name'];
        $pet_type = $row['pet_type'];
        $pet_weight = $row['pet_weight']; 
    }
} else {
    // echo "no user found in this email";
    exit();
}
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Profile </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
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
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="profile.php">Profile</a></li>
                                            <li><a href="service.php">Services</a></li>
                                            
                                            <li><a href="petview.php">Pet</a></li>
                                            <li><a href="about.php">About</a></li>  
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="index.html" class="header-btn">Logout</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main> 
        <!-- Hero Area Start -->
        <div class="slider-area2 slider-transparent d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <!-- <h2>Profile</h2> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

<section class="contact-section">
    <div class="container bg-muted">
        <div class="row">
            <div class="col-12">
                <!-- <h1 class="contact-title" style="text-align:center; padding-top:20px;">Profile</h1> -->
            </div>
            <div class="col-lg-8 offset-lg-2">
                <div class="form-container">
                    <!-- <h2 class="section-title">Profile</h2> -->
                    <form action="edit.php" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" value="<?php echo $em; ?> " readonly>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select id="gender" name="gender" required>
                                <option value="male"<?php echo ($gender == 'male') ? ' selected' : ''; ?>>Male</option>
                                <option value="female"<?php echo ($gender == 'female') ? ' selected' : ''; ?>>Female</option>
                                <option value="other"<?php echo ($gender == 'other') ? ' selected' : ''; ?>>Other</option>
                            </select>
                        </div><br><br>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" value="<?php echo $password; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number:</label>
                            <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" name="address" value="<?php echo $address; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <select id="city" name="city" required>
                                <option value="Kasaragod"<?php echo ($city == 'Kasaragod') ? ' selected' : ''; ?>>Kasaragod</option>
                                <option value="Thrissur"<?php echo ($city == 'Thrissur') ? ' selected' : ''; ?>>Thrissur</option>
                                <option value="Kollam"<?php echo ($city == 'Kollam') ? ' selected' : ''; ?>>Kollam</option>
                                <option value="Idukki"<?php echo ($city == 'Idukki') ? ' selected' : ''; ?>>Idukki</option>
                                <option value="Kottayam"<?php echo ($city == 'Kottayam') ? ' selected' : ''; ?>>Kottayam</option>
                                <option value="Kannur"<?php echo ($city == 'Kannur') ? ' selected' : ''; ?>>Kannur</option>
                            </select>
                        </div><br>
                        <h2 class="section-title">Pet Information</h2>
                        <div class="form-group">
                            <label for="pet-name">Pet Name:</label>
                            <input type="text" id="pet-name" name="pet-name" value="<?php echo $pet_name; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="pet-type">Pet Type:</label>
                            <select id="pet-type" name="pet-type" required>
                                <option value="dog"<?php echo ($pet_type == 'dog') ? ' selected' : ''; ?>>Dog</option>
                                <option value="cat"<?php echo ($pet_type == 'cat') ? ' selected' : ''; ?>>Cat</option>
                                <option value="bird"<?php echo ($pet_type == 'bird') ? ' selected' : ''; ?>>Bird</option>
                                <option value="other"<?php echo ($pet_type == 'other') ? ' selected' : ''; ?>>Other</option>
                            </select>
                        </div><br><br>
                        <div class="form-group">
                            <label for="pet-weight">Pet Weight (kg):</label>
                            <input type="number" id="pet-weight" name="pet-weight" value="<?php echo $pet_weight; ?>" required>
                        </div>
                        <div class="form-group mt-">
                            <button type="submit" class="button">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.slicknav.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>
</html>

<?php
include "dbconnect.php";
session_start();

    $email = $_SESSION['logged'];
    
    $query = "SELECT * FROM userpet where useremail='$email'";
    $result = $conn->query($query);

    
    if ($row = mysqli_fetch_array($result)) {
        $petname = $row['petname'];
        $age = $row['age'];
        $breed = $row['breed'];
        $rate = $row['rate']; 
        $description = $row['description'];
        $weight = $row['weight'];
       
    }

  
    $query = "SELECT * FROM register where email='$email'";
    $result = $conn->query($query);

    
    if ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $address = $row['address']; 
       
       
    }


?>




<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact </title>
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
    <link rel="stylesheet" href="assets/css/book.css">
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
                                        <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="doctor.php">Doctors</a></li>
                                            <li><a href="profile.php">Profile</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            <li><a href="petview.php">Pet</a></li>
                                               
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="petadduser.php" class="header-btn">Add Pet</a>
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
        <div class="slider-area2 slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>Pet</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!--? Our Services Start -->
        <div class="our-services section-padding50">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="cl-xl-10 col-lg-16 col-md-15">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-70">
                            <!-- <span>Our Professional Services</span> -->
                           
                        </div> 
                    </div>
                </div>

              
<div class="form-container">
    <h2>Pet Booking Form</h2>
    <form action="book.php" method="POST">
        <h3>Pet Details</h3>
        <div class="form-group">
            <label for="petName">Pet Name</label>
            <input type="text" id="petName" name="petname"  value="<?php echo htmlspecialchars($petname); ?>" readonly>
        </div>
        <div class="form-group">
        <label for="petBreed">Breed:</label>
                            <select  name="breed" readonly>
                            
                                <option value="Labrador Retriever"<?php echo ($breed == 'Labrador Retriever') ? ' selected' : ''; ?>>Labrador Retriever</option>
                                <option value="German Shepherd"<?php echo ($breed == 'German Shepherd') ? ' selected' : ''; ?>>German Shepherd</option>
                                <option value="Golden Retriever"<?php echo ($breed == 'Golden Retriever') ? ' selected' : ''; ?>>Golden Retriever</option> 
                                <option value="Bulldog"<?php echo ($breed == 'Bulldog') ? ' selected' : ''; ?>> Bulldog</option>
                                <option value="Beagle"<?php echo ($breed == 'Beagle') ? ' selected' : ''; ?>> Beagle</option>
                                <option value="Poodle"<?php echo ($breed == 'Poodle') ? ' selected' : ''; ?>> Poodle</option>
                                <option value="Rottweiler"<?php echo ($breed == 'Rottweiler') ? ' selected' : ''; ?>>Rottweiler</option>
                                <option value="Yorkshire Terrier"<?php echo ($breed == 'Yorkshire Terrier') ? ' selected' : ''; ?>> Yorkshire Terrier</option>
                                <option value="Dachshund"<?php echo ($breed == 'Dachshund') ? ' selected' : ''; ?>>Dachshund</option> 
                                <option value="Boxer"<?php echo ($breed == 'Boxer') ? ' selected' : ''; ?>> Boxer</option>
                                <option value="Siberian Husky"<?php echo ($breed == 'Siberian Husky') ? ' selected' : ''; ?>> Siberian Husky</option>
                                <option value="Chihuahua"<?php echo ($breed == 'Chihuahua') ? ' selected' : ''; ?>> Chihuahua</option>
                                <option value="Shih Tzu"<?php echo ($breed == 'Shih Tzu') ? ' selected' : ''; ?>>Shih Tzu</option>
                                <option value="Great Dane"<?php echo ($breed == 'Great Dane') ? ' selected' : ''; ?>> Great Dane</option>
                                <option value="Cocker Spaniel"<?php echo ($breed == 'Cocker Spaniel') ? ' selected' : ''; ?>> Cocker Spaniel</option>
                            </select>         
        </div>
        <br><br>
        <div class="form-group">
            <label for="petAge">Pet Age</label>
            <input type="text" id="petAge" name="age"  value="<?php echo htmlspecialchars($age); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="petWeight">Pet Weight</label>
            <input type="text" id="petWeight" name="weight"   value="<?php echo htmlspecialchars($weight); ?>"readonly>
        </div>  
        <div class="form-group">
            <label for="petrate">Pet Rate</label>
            <input type="text" id="petWeight" name="rate"  value="<?php echo htmlspecialchars($rate); ?>" readonly>
        </div> 
         <div class="form-group">
            <label for="description">About Pet</label>
            <input type="text" id="petWeight" name="description"  value="<?php echo htmlspecialchars($description); ?>" readonly>
        </div>

        <h3>User Details</h3>
        <div class="form-group">
            <label for="userName">Your Name</label>
            <input type="text" id="userName" name="name"   value="<?php echo htmlspecialchars($name); ?>"readonly>
        </div>
        <div class="form-group">
            <label for="userEmail">Your Email</label>
            <input type="email" id="userEmail" name="email"  value="<?php echo htmlspecialchars($email); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="userContact">Contact Number</label>
            <input type="tel" id="userContact" name="phone"   value="<?php echo htmlspecialchars($phone); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="userContact">Contact Number</label>
            <input type="tel" id="userContact" name="address"   value="<?php echo htmlspecialchars($address); ?>" readonly>
        </div>
  
        <h3>Personal Details</h3>
        
        <div class="form-group">
            <label for="userContact">Contact Number</label>
            <input type="tel" id="userphone" name="userphone" required>
        </div>
        <div class="form-group">
        <label for="description">Address</label>
        <textarea id="description" name="useraddress" rows="4" placeholder="address"></textarea>
        </div>
        <div class="form-group">
            <label for="description">Additional Information</label>
            <textarea id="description" name="userdescription" rows="4" placeholder="Any additional requests or information about the booking..."></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="button">Book Pet</button>
        </div>
    </form>
    
</div>


    </main>
    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                              <!-- logo -->
                             <div class="footer-logo mb-25">
                                 <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>WE Care For Your Dogs. </p>
                                </div>
                             </div>
                             <!-- social -->
                             <div class="footer-social">
                                 <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-square"></i></a>
                                 <a href="#"><i class="fab fa-twitter-square"></i></a>
                                 <a href="#"><i class="fab fa-linkedin"></i></a>
                                 <a href="#"><i class="fab fa-pinterest-square"></i></a>
                             </div>
                         </div>
                       </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="single-blog.html">Services</a></li>
                                    <li><a href="#">Cases</a></li>
                                    <li><a href="contact.html">  Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="#">pet Broading</a></li>
                                    <li><a href="#">pet Treatment</a></li>
                                    <li><a href="#">Vaccinations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in Touch</h4>
                                <ul>
                                 <li><a href="#">8089686779</a></li>
                                 <li><a href="#"> petcare@gmail.com</a></li>
                                 <li><a href="#">Ernakulam, Kerala</a></li>
                             </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex align-items-center">
                         <div class="col-xl-12 ">
                             <div class="footer-copy-right text-center">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>
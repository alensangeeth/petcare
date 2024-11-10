
<?php
include "dbconnect.php";
session_start();
$email=$_SESSION['logged'];
$query = "SELECT * FROM userpet where useremail='$email'";
$result = $conn->query($query);
?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    

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
    <link rel="stylesheet" href="assets/css/pet.css">
    <link rel="stylesheet" href="assets/css/petuser.css">
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
                                            </li>
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
        <!--? Slider Area Start-->
        <div class="slider-area">
            <!-- <div class="slider-active dot-style"> -->
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <!-- Video icon -->
                               
<!-- form --> 


                                <div class="hero__caption">
                                <div class="form-container">

        <form action="petadd.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pet-name">User Email</label>
                <input type="text" id="pet-name" name="email" value="<?php echo $email; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="pet-name">Pet Name</label>
                <input type="text" id="pet-name" name="petname" placeholder="Enter pet's name" required>
            </div>

            <div class="form-group">
                <label for="pet-image">Pet Image</label>
                <input type="file" id="pet-image" name="image" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="pet-age">Pet Age</label>
                <input type="number" id="pet-age" name="age" min="0" placeholder="Enter pet's age" required>
            </div>

            <div class="form-group">
                <label for="pet-breed">Pet Breed</label>
                <select id="pet-breed" name="breed" required>
                <option value="" > Choose Breed</option>
                    <option value="Labrador Retriever">Labrador Retriever</option>
                    <option value="German Shepherd">German Shepherd</option>
                    <option value="Golden Retriever">Golden Retriever</option>
                    <option value="Bulldog">Bulldog</option>
                    <option value="Beagle">Beagle</option>
                    <option value="Poodle">Poodle</option>
                    <option value="Rottweiler">Rottweiler</option>
                    <option value="Yorkshire Terrier">Yorkshire Terrier</option>
                    <option value="Dachshund">Dachshund</option>
                    <option value="Boxer">Boxer</option>
                    <option value="Siberian Husky">Siberian Husky</option>
                    <option value="Chihuahua">Chihuahua</option>
                    <option value="Shih Tzu">Shih Tzu</option>
                    <option value="Doberman Pinscher">Doberman Pinscher</option>
                    <option value="Great Dane">Great Dane</option>
                    <option value="Cocker Spaniel">Cocker Spaniel</option>
                </select>
            </div><br><br>

            <div class="form-group">
                <label for="pet-weight">Weight (kg)</label>
                <input type="number" id="pet-weight" name="weight" step="0.1" min="0" placeholder="Enter pet's weight" required>
            </div>

            <div class="form-group">
                <label for="rate">Rate</label>
                <input type="number" id="rate" name="rate"  placeholder="Enter pet's rate" required>
            </div>

            <div class="form-group">
                <label for="about-pet">About the Pet</label>
                <textarea id="about-pet" name="description" placeholder="Describe your pet" required></textarea>
            </div>

            <button type="submit" class="submit-btn">Add Pet</button>
        </form>
    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
             
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
           <br>
           <div class="card-container">
    <!-- Start PHP Loop -->
    <?php while($row = $result->fetch_assoc()): ?>
    <div class="card">
        <div class="top-bar"></div>
        <div class="notice student-notice">
            <div class="notice-header">
                <img src="<?php echo $row['image']; ?>" alt="Service Image" class="pet-image">
                <p>Pet Name: <?php echo $row['petname']; ?></p>
                <p>Pet Breed: <?php echo $row['breed']; ?></p>
                <p>Pet Age: <?php echo $row['age']; ?></p>
                <p>Pet Weight: <?php echo $row['weight']; ?></p>
                <p>Pet Rate: <?php echo $row['rate']; ?></p>
                <p>About Pet: <?php echo $row['description']; ?></p>
                <a href="noticeupdate.php?id=<?php echo $row['id']; ?>" class="button update-button">Update</a>
                <a href="noticedelete.php?id=<?php echo $row['id']; ?>" class="button delete-button" onclick="return confirm('Are you sure?')">Delete</a>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <!-- End PHP Loop -->
</div>



        <!--? Our Services Start -->
      
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
                                 <a href="home.php"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                             </div>
                             <div class="footer-tittle">
                                 <div class="footer-pera">
                                     <p>WE Care For Your Pets. </p>
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
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="service.php">Services</a></li>
                                    

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="service.php">Grooming</a></li>
                                    <li><a href="service.php">Pet Boarding</a></li>
                                    <li><a href="service.php">Pet Vaccination</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Get in Touch</h4>
                                <ul>
                                 <li><a href="#">+91 8590725305</a></li>
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
                                 
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
  </p>
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
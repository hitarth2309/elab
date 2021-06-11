<?php
session_start();
if(isset($_SESSION['user'])){
  $msg ="You have already logged in";
  echo "<script>
  alert('$msg');
  window.location ='user/index.php';
  </script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-lab DIagnostics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


  <link href="assets/img/fav.jpg" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="register/css2/style.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">


  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">

  </head>
  <body>
    <header id="header" class="fixed-top">
      <div class="container d-flex">
  
        <div class="mr-auto">
        <!-- <h1 class="text-info"><a href="#">S<span>o</span>laris Diagnostics</a></h1-->
          <!-- Uncomment below if you prefer to use an image logo -->
             <a href="index.php?#header"><img src="assets/img/e-lab_logo.png" alt="" class="img-fluid logo " style="width:150px;"></a>

        </div>
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php?#header" class="text-info">Home</a></li>
            <li><a href="index.php?#pricing" class="text-info">plans</a></li>

            <li><a href="index.php?#services" class="text-info">Services</a></li>
            <li><a href="user/booking.php"class="text-info">Booking</a></li>
     
            <li><a href="index.php?#contact" class="text-info">Contact</a></li>
            <li><a href="index.php?#about" class="text-info">About</a></li>

            <li><a href="register.php" class="text-info">Sign-Up</a></li>  
            <li><a href="login.php" class="text-info">Login</a></li>
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header>
    <body style="background-image: url(register/images2/signup-bg.jpg);">

    <div class="main">

        <section class="signup">
            <div class="container col-md-5">
                <div class="signup-content">
                    <form method="POST" action="action.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="uname" id="name" placeholder="Your Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="uemail" id="email" placeholder="Your Email" required/>
                        </div>
            <div class="form-group">
                            <input type="number" class="form-input" name="uphone" id="phone" placeholder="Your phone number" required/>
                        </div>
             <div class="form-group">
            <textarea name="uaddress" class="form-input" cols="5" rows="5" placeholder="address" required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="upass" id="password" placeholder="Password" required/>
                        </div>
            
                        
                        <div class="form-group">
                            <input type="submit" name="reg" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="pt-3 d-flex justify-content-center">
                        Have already an account ? <a href="login.php" class="text-success">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div> 

    <!-- JS -->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="js2/main.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/appear/jquery.appear.js"></script>
    <script src="assets/vendor/knob/jquery.knob.js"></script>
    <script src="assets/vendor/parallax/parallax.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/nivo-slider/js/jquery.nivo.slider.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
  
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
  </html>

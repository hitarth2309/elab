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

  <title>E-lab Diagnostics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="assets/img/fav.jpg" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="loginform/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">


  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="loginform/css/main.css">
<style>
  input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

/* Firefox */
input[type=number] 
{
  -moz-appearance: textfield;
}
</style>
  </head>
  <body>
    <header id="header" class="fixed-top">
      <div class="container d-flex">
  
        <div class=" mr-auto">
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
    <div class="limiter">
      <div class="container-login100" style="background-image: url('loginform/images/labo.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
          <span class="login100-form-title pb-4">
            Account Login
          </span>
          <form class="login100-form validate-form p-b-33 p-t-5" method="POST"
          >
  
            <div class="wrap-input100 validate-input">
              <input class="input100" type="number" name="phone" placeholder="Mobile Number" required >
              <span class="focus-input100" data-placeholder="&#xe82a;"></span>
            </div>
  
            <div class="wrap-input100 validate-input" data-validate="Enter password" >
              <input class="input100" type="password" name="pass" placeholder="Password" require>
              <span class="focus-input100" data-placeholder="&#xe80f;"></span>
            </div>
  
            <div class="container-login100-form-btn m-t-32 pt-3 pb-3">
              <input type="submit" value="Login" class="login100-form-btn" name="login">
              
            </div>
<p class="d-flex justify-content-center ">Dont Have Account?<a href="register.php" class="text-success">Register Now</a></p>
<a href="#"><p class="d-flex justify-content-center pt-2 pb-3 text-primary ">Forgot password?</p></a>
          </form>
        </div>
      </div>
    </div>
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
  <?php
include 'include/config.php';
if(isset($_POST['login'])){
    $phone =$_POST['phone'];
    $pass = $_POST['pass'];
    $phnquery="SELECT * from register where phone='$phone'";
    $equery=mysqli_query($con,$phnquery);
      if(mysqli_num_rows($equery)>0)
      {      
              $sql = "SELECT * FROM register WHERE phone ='$phone' and password = '$pass'";
              $result = mysqli_query($con,$sql);  
              $count = mysqli_num_rows($result);                
              if($count>0)
              {    
                $_SESSION['user']=$phone;
                $success = "Successfully Logged in !";
                echo "<script> alert('$success');
                        window.location='user/';  
                </script>";
            
              }
              else
               {
                $error = "Your Login Name or Password is invalid ";
                echo "<script> alert('$error');
                        window.location='login.php';  
                </script>";
              }
      }
      else
      {
         $message = "Please Register And Verify Your Number";
        echo "<script> alert('$message');
        document.location='register.php';
        </script>";
      }
}
?>
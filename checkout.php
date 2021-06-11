<?php
session_start();
if(!isset($_SESSION['user'])){
    $message = "Access Denied! Please Login OR Register Into System";
    echo "<script>
  alert('$message');
  window.location ='../login.php';
  </script>";
}

?>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="include/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


    <link href="assets/img/fav.JPG" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css2/style.css">
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

    <title>Solaris DIagnostics</title>


<style>
    .container {
        max-width: 960px;
    }

    .lh-condensed { line-height: 1.25; }
</style>

</head>    
<body>

<header id="header" class="fixed-top">
      <div class="container d-flex">
  
        <div class="logo mr-auto">
        <!-- <h1 class="text-info"><a href="#">S<span>o</span>laris Diagnostics</a></h1-->
          <!-- Uncomment below if you prefer to use an image logo -->
           <a href="index.php"><img src="assets/img/slider/logo.PNG" alt="" class="img-fluid"style="height:250px;width:150px;"></a>
        </div>
  
        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.php" class="text-info">Home</a></li>
            <li><a href="index.php?#about" class="text-info">About</a></li>
            <li><a href="index.php?#services" class="text-info">Services</a></li>
            <li><a href="index.php?#pricing" class="text-info">plans</a></li>
            <li><a href="Booking.php"class="text-info">Booking</a></li>
     
            <li><a href="index.php?#contact" class="text-info">Contact</a></li>
            <li><a href="logout.php" class="text-info">Log-out</a></li>
          </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header>
<script type="text/javascript">    
           $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
      </script>

</script>


<!--End Navbar-->


<div class="container shadow-lg mb-5 bg-white"style=" margin-top:100px">
    
    <div class="row">
        <div class="col-md-5 order-md-2 mb-4"style="padding-top:85px;">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted ">Your cart</span>
                
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 id="sname" class="my-0">Product name</h6>
                    </div>
                    <span id="sprice" class="text-muted">12 Rs</span>
                </li>
            
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (RS)</span>
                    <span id="fprice" class="my-0"><strong>20 Rs</strong></span>
                </li>
            </ul>
           </div>
        <div class="col-md-7 order-md-1"style="padding-top:85px;">
            <h4 class="mb-3 text-center">Billing Information</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <h6><label for="firstName">First name</label></h6>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid first name is required. </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6><label for="lastName">Last name</label></h6>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback"> Valid last name is required. </div>
                    </div>
                </div>

                <div class="mb-3">
                    <h6><label for="email">Email</label></h6>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com" required="">
                    <div class="invalid-feedback"> Please enter a valid email address</div>
                </div>
                <div class="mb-3">
                    <h6><label for="address">Address</label></h6>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback"> Please enter your address. </div>
                </div>
                
                <div class="row">
                    
                    <div class="col-md-3 mb-3">
                        <h6><label for="zip">Zip</label></h6>
                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback"> Zip code required. </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-6 mb-3">
                        <h6><label for="state">Date</label></h6>
                        <input type="date" autofocus="" required="" class="datepicker form-control">
                        <div class="invalid-feedback"> Invalid Date</div>
                    </div>

                </div>

                <div class="row">
                    
                    <div class="col-md-6 mb-3">
                        <h6><label for="state">Service</label></h6>
                        <select id="ddservice" class="form-control mdb-select btn-outline-dark md-form colorful-select dropdown-dark">
                                    <option value="none" selected disabled hidden>Select Services</option>
                                    <option value="1" class="text-white btn bg-dark">LIPID PROFILE</option>
                                    <option value="2" class="text-white btn bg-dark">DIABETIC PROFILE - BASIC</option>
                                    <option value="3" class=" text-white btn bg-dark ">DIABETIC PROFILE - COMPLETE</option>
                                    <option value="4" class=" text-white btn bg-dark ">THYROID FUNCTION TESTS - BASIC</option>
                                    <option value="5" class=" text-white btn bg-dark ">THYROID FUNCTION TESTS - COMPLETE</option>
                                    <option value="6" class=" text-white btn bg-dark ">LIVER FUNCTION TESTS</option>
                                    <option value="7" class=" text-white btn bg-dark ">KIDNEY FUNCTION TESTS</option>
                                    <option value="8" class=" text-white btn bg-dark ">SKELETAL FUNCTION TESTS</option>
                                    <option value="9" class=" text-white btn bg-dark ">ARTHRITIC PROFILE</option>
                                    <option value="10" class=" text-white btn bg-dark ">ANEMIA PROFILE</option>

                        </select>   
                        <div class="invalid-feedback"> Please Select Service</div>
                    </div>

                </div>

                <hr class="mb-4">
                <h4 class="mb-3">Select Payment Method</h4>
                <div class="d-block my-3">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <button id="creditbutton" class="btn btn-light btn-outline-primary btn-block" type="button"><i class="fas fa-credit-card mr-2"></i>Credit card / Debit Card</button>    
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <button id="paypalbutton" class="btn btn-light btn-outline-primary btn-block" type="button"> <i class="fab fa-paypal mr-2"></i> Paypal</button>    
                        </div>
                    </div>
                </div>

                <div id="test">
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <h6><label for="cc-name">Name on card</label></h6>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback"> Name on card is required </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <h6><label for="cc-number">Credit card number</label></h6>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                <div class="invalid-feedback"> Credit card number is required </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group"> <label><span class="hidden-xs">
                                        <h6>Expiration Date</h6>
                                    </span></label>
                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required min="1" max="12" > <input type="number" placeholder="YY" name="" class="form-control" required min="20"> 
                                <div class="invalid-feedback"> Invalid Date</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                </label> <input type="text" required class="form-control"> <div class="invalid-feedback"> CVV is required</div> </div>
                        </div>
                    </div>
                </div>
                <div id="paypal">
                    <div class="row">
                        <div class="col-md-7">
                            <h6 class="pb-2">Select your paypal account type</h6>
                            <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5"> International </label></div>
                            <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                            <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                        </div>
                    </div>
                </div>
                <hr class="mb-4">

                <div class='form-control total btn btn-info mb-3'>
                  Total:
                  <span id="amount">300 Rs</span>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                
            </form>
        </div>
    </div>
    
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation')

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
      form.addEventListener('submit', function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  }, false)
}())
</script>

<script>
    document.getElementById("ddservice").onchange = function() {myFunction()};

    function myFunction() 
    {
        
        var dds = document.getElementById("ddservice");
        var servalue = dds.options[dds.selectedIndex].text;

        document.getElementById("sname").innerHTML = servalue;

        var pvalue = dds.value;
        var names = [];

        if (pvalue == "" || pvalue.length == 0)
        {
            return false; //stop the function since the value is empty.
        }
    
        switch (pvalue) 
        {
            case '1':
                document.getElementById("sprice").innerHTML = "500 &#8360;";
                document.getElementById("fprice").innerHTML = "500 &#8360;";
                document.getElementById("amount").innerHTML = "500 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 1";
                break;
            case '2':
                document.getElementById("sprice").innerHTML = "550 &#8360;";
                document.getElementById("fprice").innerHTML = "550 &#8360;";
                document.getElementById("amount").innerHTML = "550 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 2";
                break;
            case '3':
                document.getElementById("sprice").innerHTML = "1200 &#8360;";
                document.getElementById("fprice").innerHTML = "1200 &#8360;";
                document.getElementById("amount").innerHTML = "1200 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 3";
                break;
            case '4':
                document.getElementById("sprice").innerHTML = "500 &#8360;";
                document.getElementById("fprice").innerHTML = "500 &#8360;";
                document.getElementById("amount").innerHTML = "500 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 4";
                break;
            case '5':
                document.getElementById("sprice").innerHTML = "900 &#8360;";
                document.getElementById("fprice").innerHTML = "900 &#8360;";
                document.getElementById("amount").innerHTML = "900 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 5";
                break;
            case '6':
                document.getElementById("sprice").innerHTML = "1000 &#8360;";
                document.getElementById("fprice").innerHTML = "1000 &#8360;";
                document.getElementById("amount").innerHTML = "1000 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 6";
                break;
            case '7':
                document.getElementById("sprice").innerHTML = "1000 &#8360;";
                document.getElementById("fprice").innerHTML = "1000 &#8360;";
                document.getElementById("amount").innerHTML = "1000 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 7";
                break;
            case '8':
                document.getElementById("sprice").innerHTML = "1200 &#8360;";
                document.getElementById("fprice").innerHTML = "1200 &#8360;";
                document.getElementById("amount").innerHTML = "1200 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 8";
                break;
            case '9':
                document.getElementById("sprice").innerHTML = "1800 &#8360;";
                document.getElementById("fprice").innerHTML = "1800 &#8360;";
                document.getElementById("amount").innerHTML = "1800 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 9";
                break;
            case '10':
                document.getElementById("sprice").innerHTML = "2200 &#8360;";
                document.getElementById("fprice").innerHTML = "2200 &#8360;";
                document.getElementById("amount").innerHTML = "2200 &#8360;";
                document.getElementById("ulelement").innerHTML = "abc <br> xyz 10";
                break;
        }

    }
    
</script>

<script>
    $(document).ready(function(){
        $("#test").hide();
        $("#paypal").hide();

        $("#creditbutton").click(function(){
            $("#test").toggle();
            $("#paypal").hide();

        });
        
        $("#paypalbutton").click(function(){
            $("#test").hide();
            $("#paypal").toggle();
        });
    });
</script>


<div class="col-md-12 d-flex justify-content-center pt-3 shadow-lg bg-dark">
    <p class="mt-2 mb-3 text-white">Copyright&copy:Solaris Diagnostics</p>
</div>
  <!-- Social buttons -->
</footer>
<!-- Footer -->


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
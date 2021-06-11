<?php
session_start();
include 'include/config.php';
if(!isset($_SESSION['user'])){
  $message = "Access Denied! Please Login OR Register Into System";
  echo "<script>
  alert('$message');
  window.location ='../login.php';
  </script>";
}else{
  $phone =$_SESSION['user'];
  $check ="SELECT name from register where phone ='$phone'";
  $result =mysqli_query($con,$check);
  while($row =mysqli_fetch_array($result)){
    $name =$row['name'];
  }
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

  <link href="assets/img/fav.jpg" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" href="servicestyle.css">

  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    iframe {

      left: 0;
      height: 100;
      width: 100%;
      top: 0;

      position: relative;
      overflow: hidden;

    }


.header {
  background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('assets/home.jpg') center center no-repeat;
  background-size: cover;
}

.header .header-content {
  padding-top: 8rem;
  padding-bottom: 2.125rem;
  text-align: center;
}

.header .text-container {
  margin-bottom: 3rem;
}

.header h1 {
  margin-bottom: 0.5rem;
  color: black;
}

.header .p-large {
  margin-bottom: 2rem;
  color:black;
}

.header .btn-solid-lg {
  margin-right: 0.5rem;
  margin-bottom: 1.25rem;
}
  </style>
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <!-- <h1 class="text-info"><a href="#">S<span>o</span>laris Diagnostics</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php?#header"><img src="assets/img/e-lab_logo.png" alt="" class="img-fluid" style="width: 200px;"></a>

      </div>
      <p class="p-2 text-sm mr-5 text-info">Hello,&nbsp;<?php echo $name;?></p>


      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header" class="text-info">Home</a></li>
          <li><a href="#about" class="text-info">About</a></li>
          <li><a href="#services" class="text-info">Services</a></li>
          <li><a href="#pricing" class="text-info">plans</a></li>
          <li><a href="booking.php" class="text-info">Booking</a></li>
        <li><a href='userorder.php' class='text-info'>Order History</a></li>
          <li><a href="#contact" class="text-info">Contact</a></li>
          <li><a href="logout.php" class="text-info">Log-out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


	
	

	  <!-- Header -->
    <header id="header" class="header" >
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>E-lab <span id="js-rotating"> </span></h1>
                            <p class="p-heading">"Welcome to elab.com"</p>
                            <a class="btn btn-solid-lg btn-outline-dark" href="#home">DISCOVER MORE</a>
							              <a class="btn btn-solid-lg btn-outline-dark" href="#pricing">BOOK PLANS</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <img src="assets/home.jpg" class="min-vw-100 vw-100 img-fluid"> 
    <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="assets/img/covid-19_banner1_solaris.jpg" alt="" title="#slider-direction-1" />
        <img src="assets/img/web_banner2_solaris.jpg" alt="" title="#slider-direction-2" />
      
      </div>

     
  </div>
      <!-- ======= Slider Section ======= -->
<!-- End Slider -->

  <main id="main">
   <!-- ======= Pricing Section ======= -->
   <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Our Plans</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>basic <br /> <span>1000</span></h3>
            <ol>
              
              
              <li class="check cross">Blood Group</li>
              <li class="check cross">Vitamin B12</li> 
              <li class="check cross">Vitamin D</li>
              <li class="check cross">Thyroid Function Tests</li>
              <li class="check cross">Calcium</li> 
               
              
              <li class="check">CBC-ESR</li>
              <li class="check">Urine R/M</li>
              <li class="check">RBS</li>
              <li class="check">Lipid Profile</li>
              <li class="check">SGPT</li>
              <li class="check">Creatinine</li>
              <li class="check">HbA1c</li>
              
            </ol>
             <a href='booking.php'>
            <button>Book Now</button></a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list active">
            <span class="saleon">top sale</span>
            <h3>advance <br /> <span>2100</span></h3>
            <ol>
              
              <li class="check cross">Blood Group</li>
              <li class="check cross">Vitamin B12</li> 
              <li class="check cross">Vitamin D</li>

              <li class="check">CBC-ESR</li>
              <li class="check">Urine R/M</li>
              <li class="check">RBS</li>
              <li class="check">Lipid Profile</li>
              <li class="check">Liver Function Test</li>
              <li class="check">Kidney Function Test</li>
              <li class="check ">TSH</li>
              <li class="check">HbA1c</li>
              <li class="check ">Calcium</li>
              
            </ol>
         <a href='booking.php'>
            <button>Book Now</button></a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="pri_table_list">
            <h3>premium <br /> <span>3900</span></h3>
            <ol>
              
              <li class="check">Blood Group</li>
              <li class="check">Vitamin B12</li>
              <li class="check">Vitamin D</li>
              <li class="check">CBC-ESR</li>
              <li class="check">Urine R/M</li>
              <li class="check">RBS</li>
              <li class="check">Lipid Profile</li>
              <li class="check">Liver Function Test</li>
              <li class="check">Kidney Function Test</li>
              <li class="check">Thyroid Function Tests</li>
              <li class="check">HbA1c</li>
              
              <li class="check">Calcium</li> 
              
              
            </ol>
            <a href='booking.php'>
            <button>Book Now</button></a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 pt-5 mt-auto">
          <div class="pri_table_list">
            <h3>Basic Flue Care<br /> <span>2250</span></h3>
            <ol>
              <li class="check">Complete Bloud Count</li>
              <li class="check">CRP</li>
              <li class="check">SGPT</li>
              <li class="check">LDH</li>
              <li class="check">Ferritin</li>
              <li class="check">Creatinine 3
              </li>
              <li class="check">D-Dimar
              </li>
              </ol>
             <a href='booking.php'>
            <button>Book Now</button></a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 pt-5 mt-auto">
          <div class="pri_table_list">
            <h3>Prime Care <br /> <span>19000</span></h3>
            <ol>
              <li class="check">Video Call (With Consultant)</li>
              <li class="check">Pulse Oxymeter</li>
              <li class="check">Digital Thermometer</li>
              <li class="check">Blood Test At Door</li>
              <li class="check">Covid RT PCR At Home</li>
              
              </ol>
              <a href='booking.php'>
            <button>Book Now</button></a>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Pricing Section -->
  
    <!-- ======= Services Section ======= -->
  

   
     <!-- ======= Portfolio Section ======= -->
     <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 pt-5 pb-4">
          <div class="section-headline services-head text-center">
            <h2>Plans </h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3  text-center text-dark">
          <div class="card card-1">
            <div class="card-block">
              
              <h4 class="pt-3">LIPID PROFILE <br><br><hr class="bg-dark">&#8360; 500/- </h4>
                
                <ul class="text-left ml-3">
              
                  <li>Cholestrol</li>
                  <li>Triglyceride</li>
                  <li>HDL Cholestrol</li>
                  <li>LDL Cholestrol</li>
                  <li>VLDL Cholestrol</li>
                  <li>Total Lipids</li>
                  <li>Cholestrol/HDL ratio</li> 
                  <li>LDL/HDL ratio</li>
              
                </ul>
                <a href="user/booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:15px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-2">
            <div class="card-block">
              
              <h4 class="pt-3">DIABETIC PROFILE - BASIC <br><hr class="bg-dark">&#8360; 550/- </h4>
              <ul class="text-left ml-3">
                
                <li>FBS</li>
                <li>PPBS</li>
                <li>HBA1C (Glycosylated Hemoglobin)</li>
               
              </ul>
              
                
            </div>
            <a href="user/booking.php" class="btn btn-sm btn-outline-primary" style="margin-top:100px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>

          </div>
          
        </div>
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-3">
            
            <div class="card-block">
              <h4 class="pt-3">DIABETIC PROFILE <br>- COMPLETE <hr class="bg-dark">&#8360; 1200/- </h4>
              <ul class="text-left ml-3">
              
                <li>FBS</li>
                <li>PPBS</li>
                <li>HBA1C</li>
                <li>Complete Lipid Profile</li>
              
                <li>CBC</li>
                <li>Urine - Routine</li>
                <li>Serum Creatinie</li>
                <li>Urinary Mircroalbumin</li>
              
              </ul>
              <a href="user/booking.php" class="btn btn-sm btn-outline-primary mt-3">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-4">
            <div class="card-block">
              <h4 class="pt-3">THYROID FUNCTION TESTS - BASIC<br><hr class="bg-dark">&#8360; 500/- </h4>
              <ul class="text-left ml-3">
              
                <li>T3 (Triiodothyronine)</li>
                <li>T4 (Thyroxine)</li>
                <li>TSH (Thyroid Stimulating Hormone)</li>
              </div>
              </ul>
              <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:100px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-5">
            <div class="card-block">
              <h4 class="pt-3">THYROID FUNCTION TESTS-COMPLETE <br> <br><hr class="bg-dark">&#8360; 900/- </h4>
              <ul class="text-left ml-3">
              
                <li>T3 (Triiodothyronine)</li>
                <li>T4 (Thyroxine)</li>
                <li>TSH (Thyroid Stimulating Hormone)</li>
              
  
              
                <li>FT3 (Free T3)</li>
                <li>FT4 (Free T4)</li>
              </div>
              </ul>
               <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:35px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
      
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-6">
            <div class="card-block">
              <h4 class="pt-3">LIVER FUNCTION TESTS <br><hr class="bg-dark">&#8360; 1000/-</h4>
              <ul class="text-left ml-3">
              
                <li>SGPT</li>
                <li>SGOT</li>
                <li>ALP</li>
                <li>GGT</li>
                <li>Bilirubin - Total,</li>
                <li>Direct & Indirect</li>
                <li>Protein - Total,</li>
                <li>Albumin, Globulin</li>
                <li>A/G ratio</li>
              
              </ul>
               <a href="booking.php" class="btn btn-sm btn-outline-primary mb-3">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-7">
            <div class="card-block">
              <h4 class="pt-3">KIDNEY FUNCTION TESTS <br><hr class="bg-dark">&#8360; 1000/- </h4>
              <ul class="text-left ml-3">
              
                <li>Serum Creatinine</li>
                <li>Urea</li>
                <li>Uric Acid</li>
                <li>Urine Routine</li>
              
                <li>Sodium</li>
                <li>Potassium</li>
                <li>Chloride</li>
              
              </ul>
              <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:40px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-8">
            
            <div class="card-block">
              <h4 class="pt-3">SKELETAL FUNCTION TESTS<br><hr class="bg-dark">&#8360; 1200/-</h4>
              <ul class="text-left ml-3">
                <li>Calcium</li>
                <li>Phosphorus</li>
                <li>Vitamin D</li>
              </ul>
               <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:120px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
        </div>
        <div class="row mt-4">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5">
          <div class="text-center">
            <a href="service.php" class="btn-lg btn btn-outline-dark">View More <i class="pl-2 fa fa-angle-right" ></i></a>
          </div>
        </div>
     
      </div>
   <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Details About Services </h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>Hematology</h4>
                  <p>
                    Routine hematology testing including complete blood count, blood differential, 
                    smear morphology and bone marrow staining.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>COAGUALATION STUDIES</h4>
                  <p>
                    Clinicians frequently order coagulation tests, such as the prothrombin time (PT), 
                    activated partial thromboplastin time (aPTT), and thrombin time (TT), to assess blood clotting function in patients.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>BIOCHEMISTRY</h4>
                  <p>
                    The laboratory performs a wide variety of different biochemical tests in whole blood, serum/ plasma and other bio fluids by the use of a wide range of equipment,
                     from the simple most basic to automated, modern and sophisticated systems. 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>IMMUNOASSAY
                  </h4>
                  <p>
                    Immunoassays can be used to test for the presence of a specific antibody or a specific antigen in blood or other fluids. 
                    When immunoassays are used to test for the presence of an antibody in a blood or fluid sample, 
                    the test contains the specific antigen as part of the detection system.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>CYTOLOGY</h4>
                  <p>
                    The Cytology Laboratory offers testing of gynecological, non-gynecological and fine needle aspiration specimens 
                    in determining normal and disease-altered cells from the various body sites.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>HISTOPATHOLOGY</h4>
                  <p>
                    Histopathology is the diagnosis and study of diseases of the tissues, and involves examining tissues and/or cells 
                    under a microscope. Histopathologists are responsible for making tissue diagnoses and helping 
                    clinicians manage a patient's care.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>CLINICAL PATHOLOGY
                  </h4>
                  <p>
                    Clinical pathology supports the diagnosis of disease using laboratory testing of blood and other bodily fluids,
                     tissues, and microscopic evaluation of individual cells.                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div> <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                  </a>
                  <h4>MOLECULAR PATHOLOGY</h4>
                  <p>
                    Since its inception, this laboratory has been developing and performing state-of-the-art molecular-based tests to aid in the diagnosis and management of infectious disease, genetic disorders, 
                    solid tumor malignancies and monitoring transplant, working closely with clinicians, pathologists and health care professionals.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          
        </div>
      </div>
    </div>
        
   <!-- ======= About Section ======= -->
   <div id="about" class="about-area area-padding bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About e-lab</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/e-lab_logo.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well ">
                <a href="#">
                  <h4 class="sec-head">Diagnostics Maintenance </h4>
                </a>
             
                <ul>
                  <li>
                    <i class="fa fa-check"></i> Cloud Based advanced patient registration and follow up system

                  </li>
                  <li>
                    <i class="fa fa-check"></i> Fully automated & barcoded sample processing tracking and storage systems.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> All the test done according to ISO 15189 and NABL guidelines.
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Stringent internal quality control and external quality assessment program for accurate results
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Samples are processing in fully automated analyzers
                  </li>
                  <li>
                    <i class="fa fa-check"></i> Various complete health check-up plans with consultation with pathologists
                  </li> 
                  <li>
                    <i class="fa fa-check"></i> complete Diagnostics services for factories and corporate companies.nav-link

                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->




    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
          <div class="contact-overly"></div>
          <div class="container ">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                  <h2>Contact us</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-phone text-success"></i>
                    <p>
                      Call:phone number here
                      <br>
                      <span></span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-envelope text-info"></i>
                    <p>
                      Email:email address here <br>
                      <span>Web: website here</span>
                    </p>
                  </div>
                </div>
              </div>
              <!-- Start contact icon column -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="contact-icon text-center">
                  <div class="single-icon">
                    <i class="fa fa-map-marker text-danger"></i>
                    <p>
                      address here</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">

              <!-- Start Google Map -->
             
              <!-- End Google Map -->

              <!-- Start  contact -->
              <div class="col-md-12 col-sm-5 col-xs-12">
                <h5>Feedback</h5>
                <hr color="info">
                <div class="form contact-form">
                  <form method="post" action="feedback.php">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Send" name="submit" class="btn btn-lg btn-outline-info" style="border-radius:80px;">
                    </div>
                  </form>
                </div>
              </div>
              <!-- End Left contact -->
            </div>
          </div>
        </div>
      </div><!-- End Contact Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer>
      <div class="footer-area bg-white">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer-content">
                <div class="footer-head">
                  <div class="footer-logo">
                    <img src="assets/img/e-lab_logo.png" alt="">
                  </div>

                  <div class="footer-icons">
                    <ul>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-google"></i></a>
                      </li>
                      <li>
                        <a href="#" target="_blank"><i class="fa fa-envelope"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->
            <div class="col-md-8 col-sm-4 col-xs-12 bg-white">
              <div class="footer-content">
                <div class="footer-head">
                  <div class="footer-contacts text-justify ml-5">
                    <p><span><i class="fa fa-map-marker text-danger"></i></span>Address-1</p>
                    <p><span><i class="fa fa-phone text-success"></i></span>phone</p>
                    <p><span><i class="fa fa-map-marker text-danger"></i></span>Address-2</p>
                    <p><span><i class="fa fa-phone text-success"></i></span>phone-2</p>
                    <p><span><i class="fa fa-envelope text-info"></i></span>email</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- end single footer -->

          </div>
        </div>
      </div>
      <div class="footer-area-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="copyright text-center">
                <p>
                  &copy; Copyright <strong>e-lab Diagnostics</strong>. All Rights Reserved
                </p>
              </div>
              <div class="credits">
                <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
            -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
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

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="servicestyle.css" rel="stylesheet">
</head>
<body>

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
          <li class="active"><a href="index.php" class="text-info">Home</a></li>
          <li><a href="index.php?#about" class="text-info">About</a></li>
          <li><a href="index.php?#services" class="text-info">Services</a></li>
          <li><a href="index.php?#pricing" class="text-info">plans</a></li>
          <li><a href="booking.php" class="text-info">Booking</a></li>
          <li><a href='userorder.php' class='text-info'>Booking History</a></li>
          <li><a href="index.php?#contact" class="text-info">Contact</a></li>
          <li><a href="logout.php" class="text-info">Log-out</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
    
<!-- ======= Services Section ======= -->
<div id="services" class="services-area area-padding mt-2 bg-white">
	<div>
	
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
              
              <h4 class="pt-3">LIPID PROFILE <br><hr class="bg-dark">&#8360; 500/- </h4>
                
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
                <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:40px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
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
            <a href="booking.php" class="btn btn-sm btn-outline-primary" style="margin-top:100px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>

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
              <a href="booking.php" class="btn btn-sm btn-outline-primary mt-3">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-4">
            <div class="card-block">
              <h4 class="pt-3">THYROID FUNCTION TESTS <br>- BASIC <br><hr class="bg-dark">&#8360; 500/- </h4>
              <ul class="text-left ml-3">
              
                <li>T3 (Triiodothyronine)</li>
                <li>T4 (Thyroxine)</li>
                <li>TSH (Thyroid Stimulating Hormone)</li>
              </div>
              </ul>
              <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:75px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-3 text-center text-dark">
          <div class="card card-5">
            <div class="card-block">
              <h4 class="pt-3">THYROID FUNCTION TESTS <br>- COMPLETE <br><hr class="bg-dark">&#8360; 900/- </h4>
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
  


      <div class="row">
        <div class="col-sm-3 text-center mb-3">
          <div class="card card-8">
            
            <div class="card-block">
              <h4 class="pt-3">ARTHRITIC PROFILE<br><hr class="bg-dark">&#8360; 1800/-</h4>
              <ul class="text-left ml-3">
              
                <li>CBC</li>
                <li>ESR</li>
                <li>Uric Acid</li>
                <li>CRP</li>
              
                <li>Rheumatoid Factor (RF)</li>
                <li>Anti CCP</li>
                <li>ANA (IF)</li>
              </ul>
              <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:60px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-sm-3 text-center">
          <div class="card card-8">
            
            <div class="card-block">
              <h4 class="pt-3">ANEMIA PROFILE<br><hr class="bg-dark">&#8360; 2200/-</h4>
              <ul class="text-left ml-3">
              
                <li>CBC</li>
                <li>Serum Iron</li>
                <li>Folic Acid</li>
                <li>TIBC</li>
                <li>Ferritin</li>
                <li>Vitamin B12</li>
              </ul>
               <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:80px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
            </div>
          </div>
        </div>
  
        
      </div>
    </div>

    <div id="pricing" class="pricing-area area-padding bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Secure Health Plans</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12 mh-100">
            <div class="pri_table_list">
              <h3>Basic <br /> <span>&#8360; 800/- </span></h3>
              <ol>
                
                <li class="check ">Routine Investigations</li>
                <li class="check ">CBC, ESR, Urine-Routine</li> 
                <li class="check">Diabetic Profile</li>
                <li class="check">FBS</li>
                <li class="check">Complete Lipid Profile</li>
                <li class="check">Liver Function Tests</li>
                <li class="check">SGPT</li>
                <li class="check">Kidney Function Tests</li>
                <li class="check">Serum Creatinine</li>
                <li class="check cross">Protein - Total, Albumin,<br> Globulin, A/G ratio</li>
                <li class="check cross">Joint and Skeletal</li>
                <li class="check cross">Function Tests</li>
                <li class="check cross">Calcium, Uric Acid</li>
                <li class="check cross">Thyroid Function Tests</li>
                <li class="check cross">TSH</li>
                <li class="check cross">T3, T4</li>
                <li class="check cross">Vitamins</li>
                <li class="check cross">Vitamin B12</li>
                <li class="check cross">Vitamin D</li>
                <li class="check cross">HBA1C,>Urinary Microalbumin</li>
                <li class="check cross"> Sodium, Potassium, Chloride</li>
                <li class="check cross"> SGOT, GGT</li>

              </ol>
             <a href="booking.php"> <button>Book Now</button></a>
            </div>
          </div>

          <div class="col-md-4 col-sm-4 col-xs-12 mh-100">
            <div class="pri_table_list">
              <h3>Complete <br /> <span>&#8360; 1500/-</span></h3>
              <ol>
                
                <li class="check ">Routine Investigations</li>
                <li class="check ">CBC, ESR, Urine-Routine</li>                
                <li class="check">Diabetic Profile</li>
                <li class="check">FBS & PPBS</li>
                <li class="check">Complete Lipid Profile</li>
                <li class="check">Liver Function Tests</li>
                <li class="check">SGPT, ALP</li>       
                <li class="check">Protein - Total, Albumin,<br> Globulin, A/G ratio</li>
                <li class="check">Kidney Function Tests</li>
                <li class="check">Serum Creatinine, Urea</li>
                <li class="check">Joint and Skeletal</li>
                <li class="check">Function Tests</li>
                <li class="check">Calcium, Uric Acid</li>
                <li class="check">Thyroid Function Tests</li>
                <li class="check">TSH</li>
                <li class="check cross">T3, T4</li>
                <li class="check cross">Vitamins</li>
                <li class="check cross">Vitamin B12</li>
                <li class="check cross">Vitamin D</li>
                <li class="check cross">HBA1C,>Urinary Microalbumin</li>
                <li class="check cross"> Sodium, Potassium, Chloride</li>
                <li class="check cross"> SGOT, GGT</li>

              </ol>
             <a href="booking.php"> <button>Book Now</button></a>
            </div>
          </div>
         
          <div class="col-md-4 col-sm-4 col-xs-12 mh-100">
            <div class="pri_table_list">
              <h3>Advanced <br /> <span>&#8360; 3000/-</span></h3>
              <ol>
                <li class="check ">Routine Investigations</li>
                <li class="check ">CBC, ESR, Urine-Routine</li> 
                 
                <li class="check">Diabetic Profile</li>
                <li class="check">FBS & PPBS</li>
                <li class="check">HBA1C (Glycosylated Hemoglobin),<br>Urinary Microalbumin</li>
                <li class="check">Complete Lipid Profile</li>
                <li class="check">Liver Function Tests</li>
                <li class="check">SGPT, SGOT, ALP, GGT</li>

                <li class="check">Bilirubin - Total, <br> Direct & Indirect</li>
                <li class="check">Protein - Total, Albumin,<br> Globulin, A/G ratio</li>

                <li class="check">Kidney Function Tests</li>
                <li class="check">Serum Creatinine, Urea <br> Sodium, Potassium, Chloride</li>
                <li class="check">Joint and Skeletal</li>
                <li class="check">Function Tests</li>
                <li class="check">Calcium, Phosphorus,<br> Uric Acid, RF</li>
                <li class="check">Thyroid Function Tests</li>
                <li class="check">T3, T4, TSH</li>
                <li class="check">Vitamins</li>
                <li class="check">Vitamin B12</li>
                <li class="check">Vitamin D</li>
              </ol>
             <a href="booking.php"> <button>Book Now</button></a>
            </div>
          </div>
        </div>
          
        <div class="row mt-5"> 
          
            <div class="col-sm-3 text-center ml-5 mr-5">
              <div class="card card-2">
                <div class="card-block">
                  
                  <h4 class="pt-3" >Secure Health Complete <br> + VITAMIN B12 & D <br><hr class="bg-dark">&#8360; 2500/- </h4>
                    
                </div>
                <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:160px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
              </div>
            </div>            
          
            <div class="col-sm-3 text-center ml-5 mr-5">
              <div class="card card-2">
                <div class="card-block">
                  
                  <h4 class="pt-3" >Secure Health Complete <br> + PSA <br><hr class="bg-dark">&#8360; 1800/- </h4></h4>
                    
                </div>
                <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:160px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
              </div>
            </div>            
          
            <div class="col-sm-3 text-center ml-3">
              <div class="card card-2">
                <div class="card-block">
                  
                  <h4 class="pt-3" >Secure Health Advanced <br> + PSA <br><hr class="bg-dark">&#8360; 3300/-</h4>
                    
                </div>
                 <a href="booking.php" class="btn btn-sm btn-outline-primary"style="margin-top:160px;">Book<i class="pl-2 fa fa-angle-right" ></i></a>
              </div>
            </div>            
          

        </div>

      </div>
    </div>   

</div><!-- End Services Section -->


</body>
</html>
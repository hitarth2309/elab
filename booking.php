<?php
session_start();
include "include/config.php";
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
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-lab DIagnostics</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/fav.PNG" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" type="text/css" href="css2/style.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
  <link href="booking.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
  
  
  <style> 
        .dropdown-toggle::before,
        .dropdown-toggle::after
        { 
            border: none;
            content: none; 
        } 
        
    </style> 
</head>

<body>

<script>
  $(function() {
  $('#dp').datepicker();
});

$(function() {
  $('.selectpicker').selectpicker();
});

</script>
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
  </header>
    

<div class="banner3">
  <div class="py-5 banner" style="background-image:url('loginform/images/labo.jpg');">
    <form method="POST"  name="sampleform" id="sampleform" >  
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-5">
          <h3 class="my-5 text-white font-weight-medium text-uppercase">Book Appointment</h3>
          <div class="bg-white">
            <div class="form-row border-bottom p-4">
                <label class="text-inverse font-12 text-uppercase">Name</label>
                <input type="text" class="border-0 p-0 font-14 form-control" placeholder="Your Name" name="inputname" required id="name">
              </div>
            <div class="form-row border-bottom p-4">
              <label class="text-inverse font-12 text-uppercase">Email Address</label>
              <input type="text" class="border-0 p-0 font-14 form-control" placeholder="Enter your Email Address" id="email" name="inputemail" required>
            </div>

            <div class="form-row border-bottom p-4">
              <label class="text-inverse font-12 text-uppercase">Phone Number</label>
              <input type="number" name="inputnumber" id="phone" class="border-0 p-0 font-14 form-control" placeholder="Enter your Phone Number" required  min="0" max="9999999999">
            </div>

            <div class="form-row border-bottom p-4">
              <label class="text-inverse font-12 text-uppercase">Address</label>
              <textarea col="1" row="1" class="border-0 p-0 font-weight-light font-14 form-control" id="address" placeholder="Write Down the Address" name="inputaddress" required ></textarea>
            </div>

            <div class="form-row border-bottom p-4 position-relative">
              <label class="text-inverse font-12 text-uppercase">Booking Date</label>
                  <input type="date" name="inputdate" id="date" autofocus="" required="" class="datepicker form-control border-0 p-0 font-14" placeholder="please select date by click here">
            </div>
            
            <div class="border-bottom p-4">
              <label class="text-inverse font-12 text-uppercase">Time</label>
            <div class="row">
            <div class="col-md-2">
              <div class="form-control border-0 p-0" style="border: none;" >
              <strong><label for="time" class="font-14 text-dark">From</label></strong>
              </div>
            </div>
              <div class="col-md-3 mr-2">
                  <strong><input id="from_time" type="time" name="ftime" class="#" required> </strong>
              </div>
              <div class="col-md-2">
                  <div class="form-control border-0 p-0 " style="border: none;" >
                  <strong><label for="time" class="font-14 text-dark">To</label></strong>
              </div>
            </div>              
                <div class="col-md-4">       
                  <strong><input type="time" id="to_time" name="ttime" class="#" required></strong>
                </div>
            </div>
            </div>
          
            <div class="form-row border-bottom p-4">
            <label class="text-inverse font-12 text-uppercase">Services</label>
              <select id="select"  name="inputservice" class="selectpicker form-control" data-style="form-control font-14 border-0 p-2" multiple data-live-search="true" onchange="getSelectValues(this)" title="Click here to select services" data-selected-text-format="count > 3>" >
                  
                  <optgroup label="Services">
                    <option value="500" class="text-dark d-flex align-content-between"><label class="float-left">LIPID PROFILE </label><label class="d-flex">- 500</label></option>
                    <option value="550" class="text-dark ">DIABETIC PROFILE - BASIC - 550</option>
                    <option value="1200" class="text-dark ">DIABETIC PROFILE - COMPLETE - 1200</option>
                    <option value="500" class="text-dark ">THYROID FUNCTION TESTS - BASIC - 500</option>
                    <option value="900" class="text-dark ">THYROID FUNCTION TESTS - COMPLETE - 900</option>
                    <option value="1000" class="text-dark ">LIVER FUNCTION TESTS - 1000</option>
                    <option value="1000" class="text-dark ">KIDNEY FUNCTION TESTS - 1000</option>
                    <option value="1200" class="text-dark ">SKELETAL FUNCTION TESTS - 1200</option>
                    <option value="1800" class="text-dark ">ARTHRITIC PROFILE - 1800</option>
                    <option value="2200" class="text-dark">ANEMIA PROFILE - 2200</option>
                  </optgroup>
                  
                  <optgroup label="Plans">

                      <option value="1000" class="text-dark">Basic Plan - 1000</option>
                      <option value="2100" class="text-dark">Advanced Plan - 2100</option>
                      <option value="3900" class="text-dark">Premium Plan - 3900</option>
                    
                    <optgroup label="Covid Special">
                      <option value="2250" class="text-dark">Basic Flu Care - 2250</option>
                      <option value="19000" class="text-dark">Prime Care - 19000</option>
                    </optgroup>

                    <optgroup label="Secure Health Plans">
                      <option value="800" class="text-dark">Secure Health Plan - Basic - 800</option>
                      <option value="1500" class="text-dark">Secure Health Plan - Complete - 1500</option>
                      <option value="3000" class="text-dark">Secure Health Plan - Advanced - 3000</option>
                      <option value="2500" class="text-dark">Secure Health Plan - Complete + Vitamin B12 & D - 2500</option>
                      <option value="1800" class="text-dark">Secure Health Plan - Complete + PSA - 1800</option>
                      <option value="3300" class="text-dark">Secure Health Plan - Advanced + PSA - 3300</option>
                    </optgroup>

                  </optgroup>
              </select>   
            </div>
      

            <div class="form-row border-bottom p-4">
                <label class="text-inverse font-12 text-uppercase">Total</label>
                <input type="text" id="total_price" autofocus="" class="form-control bg-white text-dark border-0 p-0 font-14" name="inputprice" disabled value="" required>
            </div>

            <div>
            <button class="m-0 border-0 py-4 font-14 font-weight-medium btn btn-danger-gradiant btn-block position-relative rounded-0 text-center text-white text-uppercase" data-toggle="modal"data-target="#staticBackdrop" id="conform">
                      <span>Book Appointment Now</span>
                      </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="staticBackdropLabel">kindly Checkout your details</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <label class="form-control">Name :<span id="s_uname"></span></label>
              <label class="form-control">Email Address:<span id="s_email"></span></label>
              <label class="form-control">Phone Number: <span id="s_number"></span></label>
              <label class="form-control">Address:<span id="s_address"></span></label>
              <label class="form-control">Booking Date:<span id="s_date"></span></label>
              <label class="form-control">From : <span id="s_from"></span></label>
              <label class="form-control">To :<span id="s_to"></span></label>
              <label>Selected Service</label>
              <textarea class="form-control" disabled cols="5" rows="5" id="s_service"></textarea>
              <label class="form-control mt-2">Total Price: <span id="s_total"></span></label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" data-dismiss="modal">Edit</button>
              <button type="button" class="btn btn-success" data-dismiss="modal" id="book">Confirm Book</button>
            </div>
          </div>
        </div>
      </div>
<script>
  var service = "";
   function getSelectValues(select){
     var result = [];
      var revalue = [];
      var options = select && select.options;
      var opt;
      var sum = 0;
      
      for (var i=0;i<options.length;i++) 
      {
        opt = options[i];

        if (opt.selected) 
        {
          result.push(opt.value);
          revalue.push (opt.text);
        }
      }   
      var dta = result.length;
      service = revalue.toString();
      while(dta--){
      sum +=parseInt(result[dta]); 
    }
      $('#total_price').val(sum);     
  }

$("#conform").click(function(e){
        e.preventDefault();
        var  uname= $("#name").val();
        var  umail= $("#email").val();
        var  uphone= $("#phone").val();
        var  uaddress= $("#address").val();
        var  udate= $("#date").val();
        var  uftime= $("#from_time").val();
        var  uttime= $("#to_time").val();
        var  utotal= $("#total_price").val();

        $("#s_uname").text(uname);
        $("#s_email").text(umail);
        $("#s_number").text(uphone);
        $("#s_date").text(udate);
        $("#s_address").text(uaddress);
        $("#s_from").text(uftime);
        $("#s_to").text(uttime);
        $("#s_service").text(service);
        $("#s_total").text(utotal);
        });
        $("#book").click(function(e)
        {
            var conf = confirm("Are you sure?Please kindly check your all details");
            if(conf==true){
            var username = $("#name").val();
            var email = $("#email").val();
            var number = $("#phone").val();
            var address = $("#address").val();
            var date = $("#date").val();
            var from_time = $("#from_time").val();
            var to_time = $("#to_time").val();
            var price = $("#total_price").val();
            $.ajax({
                    url: 'test.php',
                    type: 'POST',
                    data: {username:username,
                    email:email,
                    address:address,
                    phone:number,
                    date:date,
                    ftime:from_time,
                    ttime:to_time,
                    service:service,
                    price:$("#total_price").val(),
                },
                success:function(data){
        
                        if(data){
                        alert('successfully Booked');
                        window.location='index.php';
                        }
                        
                }
            });
           
        }
        
        });
 </script>



<!-- Appy Chatbot widget, Paste the code in the <body> section -->
<!-- Appy Chatbot widget, Paste the code in the <body> section -->
<script id="appyWidgetInit" src="https://chatbot.appypie.com/widget/loadbuild.js?cid=kh852s5x-AGENT1604780838934-BOTID1604920906820&name=mixBuild"></script>
<!-- /. End Appy chatbot widget code -->
<!-- /. End Appy chatbot widget code -->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>
</html>


?>
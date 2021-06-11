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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link href="assets/css/style.css" rel="stylesheet">

 
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

        <div class="mt-5 p-2 pt-5 row shadow-lg m-5 bg-white">
            <div class="container-xl">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8"><h2>Booking <b>History</b></h2></div>
                                
                            </div>
                        </div>
                        
                        <table id="table1" class="table table-striped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>from time</th>
                                    <th>To time</th>
                                    <th>Service</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $phone = $_SESSION['user'];
                                    $count=1;
                                    $sel_query="Select * from booking WHERE phone = $phone";
                                    $result = mysqli_query($con,$sel_query);
                                    while($row = mysqli_fetch_assoc($result)) 
                                    { ?>
                                    <tr>
                                        <td style="text-align:center;"><?php echo $count; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["phone"]; ?></td>
                                        <td><?php echo $row["date"]; ?></td>
                                        <td><?php echo $row["start_time"]; ?></td>
                                        <td><?php echo $row["to_time"]; ?></td>
                                        <td><?php echo $row["service"]; ?></td>
                                        <td><?php echo $row["price"]; ?></td>

                                    </tr>
                                <?php $count++; } ?>
    
                            </tbody>
                               
                        </table>
                        
                    </div>
                </div>  
            </div>   
            
    </div>

    <script src="assets/js/main.js"></script>

</body>
</html>
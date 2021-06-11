<?php
session_start();
if(!isset($_SESSION['admin'])){
  $mess ="Access Denied !";
  echo "<script>
  alert('$mess');
  window.location='index.php';
  </script>";
}
else{
  include 'include/config.php';
  $user ="SELECT count(*)AS data1 from register";
  $res =mysqli_query($con,$user);
  $user1 =mysqli_fetch_array($res);

  $order ="SELECT count(*)AS data2 from booking";
  $res1 =mysqli_query($con,$order);
  $order2 =mysqli_fetch_array($res1);

  $feed ="SELECT count(*)AS data3 from feedback";
  $res2 =mysqli_query($con,$feed);
  $feed2 =mysqli_fetch_array($res2);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Dashboard | Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <script src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="js/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>
    
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <style>
    .map-container {
      overflow: hidden;
      padding-bottom: 56.25%;
      position: relative;
      height: 0;
    }

    .map-container iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }
  </style>
</head>

<body class="grey lighten-3">

  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="" target="_blank">
          <img src="img/e-lab_logo.png" alt="" style="height: 70px;">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
            <strong><a class="nav-link waves-effect text-primary" href="dashboard.php">Dashboard</a></strong>
            </li>
            <li class="nav-item">
           <strong> <a class="nav-link waves-effect text-primary" href="manageuser.php">Manage user</a></strong>
            </li>
            <li class="nav-item">
            <strong><a class="nav-link waves-effect text-primary" href="orders.php">Manage Orders</a></strong>
            </li>
            <li class="nav-item">
           <strong><a class="nav-link waves-effect text-primary" href="messages.php">Manage Feedback</a></strong>
            </li>
            <li class="nav-item">
              <strong><a class="nav-link waves-effect text-primary" href="logout.php">Logout</a></strong>
              
            </li>
          </ul>
        </div>

      </div>
    </nav>
  </header>

  <main class="col-md-12 pt-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4">

        <!--Card content-->
        <div class="card-body">

          <h4 class="mb-2 pt-1">
            <a href="#" target="#">Home Page</a>
            <span>/</span>
            <span>Dashboard</span>
          </h4>

        </div>

      </div>
      <div class="row">
          <a href="manageuser.php">
        <div class="card text-white bg-success m-3 shadow-lg" style="width: 18rem;height:13rem;">
          <div class="card-header">Users</div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $user1['data1'];?>  Users</h3>
              <div class="card-footer bg-transparent border-success">
              </div>

          </div>
        </div>
        </a>
         <a href="orders.php">
        <div class="card text-white bg-dark m-3 shadow-lg" style="width: 18rem;height:13rem;">
          <div class="card-header">Orders</div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $order2['data2'];?> Orders</h3>
          </div>
        </div>
        </a>
         <a href="messages.php">
        <div class="card bg-danger text-white m-3 shadow-lg" style="width: 18rem;height:13rem;">
          <div class="card-header">Feedback</div>
          <div class="card-body">
            <h3 class="card-title"><?php echo $feed2['data3'];?> Feedback</h3>
          </div>
        </div>
        </a>
      </div>
      <!-- /.content-wrapper-->
      <footer class="sticky-footer bg-dark text-white shadow-lg"
        style="margin-top:300px;border-radius:60px;height:40px;">
        <div class="container">
          <div class="text-center p-2">
            <small>Copyright © E-lab Diagnostic</small>
          </div>
        </div>
      </footer>
</body>

</html>
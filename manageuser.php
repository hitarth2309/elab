<?php
session_start();
if(!isset($_SESSION['admin'])){
  $mess ="Access Denied !";
  echo "<script>
  alert('$mess');
  window.location='index.php';
  </script>";
}
include "include/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
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
            <a href="dashboard.php">Home Page</a>
            <span>/</span>
            <span>Manage Users</span>
          </h4>

        </div>

      </div>
        <div class="content-wrapper">
            <div class="container-fluid">
            
                <!-- Breadcrumbs-->
       
            <!-- Icon Cards-->
          
            <div class="row shadow-lg m-3 bg-white">
                <div class="container">
                    <div class="table-responsive">
                        <div class="table-wrapp">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-md-12"><h2><b>Users</b></h2></div>
                                    
                                </div>
                            </div>
                            
                            <table id="table1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $count=1;
                                        $sel_query="Select * from register ORDER BY name asc;";
                                        $result = mysqli_query($con,$sel_query);
                                        while($row = mysqli_fetch_assoc($result)) 
                                        { ?>
                                        <tr>
                                            <td style="text-align:center;"><?php echo $count; ?></td>
                                            <td><?php echo $row["name"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td><?php echo $row["address"]; ?></td>
                                            <td><?php echo $row["phone"]; ?></td>
                                            
                                            <td>
                                            <a href="udelete.php?id=<?php echo $row["id"];?>" class="delete" data-toggle="tooltip" title="Delete" style="justify-content: center;"><i class="material-icons text-danger">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                    <?php $count++; } ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>  
                </div>   
                
              </div>
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
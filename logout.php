<?php
session_start();
if(isset($_SESSION['user']))
{
  session_unset();
  session_destroy();
  $message = "Logout Successfully";
  echo "<script>
  alert('$message');
  window.location ='../index.php';
  </script>";
}
if(!isset($_SESSION['user'])){
 $message = "Access Denied!";
  echo "<script>
  alert('$message');
  window.location ='../login.php';
  </script>";
}


?>
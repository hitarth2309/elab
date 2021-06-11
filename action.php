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
<?php
include('include/config.php');
if(isset($_POST['reg']))
{
$name =$_POST['uname'];
$email =$_POST['uemail'];
$phone=$_POST['uphone'];
$address =$_POST['uaddress'];
$pass = $_POST['upass'];
$phnquery="SELECT * from register where phone='$phone'";
$equery=mysqli_query($con,$phnquery);
if(mysqli_num_rows($equery)>0)
{
    $message = "This Phone is already Register login or verify phone number";
    echo "<script> alert('$message');
    document.location='register.php';
    </script>";
    
}
else{

$q ="INSERT INTO register(id, name, phone, email, address,password) 
VALUES ('','$name','$phone','$email','$address','$pass')";
$res = mysqli_query($con,$q);
if($res)
{
    $message = "Successfully Registerd Verify Your Mobile Number";
    echo "<script> alert('$message');
    document.location='login.php';
    </script>";
}
}
}
?>
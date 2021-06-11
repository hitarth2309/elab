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
<?php
if(isset($_POST['submit']))
{
    include 'include/config.php';
    $name =$_POST['name'];
    $mail =$_POST['email'];
    $subject =$_POST['subject'];
    $mesg = $_POST['message'];

    $q = "INSERT INTO feedback(id,name,mail,subject,message) VALUES ('','$name','$mail','$subject','$mesg')";
    $res =mysqli_query($con,$q);
    if($res)
    {
        $mess = "Your message has been sent. Thank you!";
        echo "<script>
        alert('$mess');
        window.location='index.php?#contact';
        </script>";
    }
    else
    {
        $mess = "failed to submit response";
        echo "<script>
        alert('$mess');
        window.location='index.php?#contact';
        </script>";
    }

    
}
?>
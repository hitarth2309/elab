<?php
require('include/config.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM register WHERE id=$id"; 
$result = mysqli_query($con,$query);

header("Location: manageuser.php"); 
?>
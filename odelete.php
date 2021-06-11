<?php
require('include/config.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM booking WHERE id=$id"; 
$result = mysqli_query($con,$query);

header("Location: orders.php"); 
?>
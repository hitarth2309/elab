<?php
require('include/config.php');

$id=$_REQUEST['id'];
$query = "DELETE FROM feedback WHERE id=$id"; 
$result = mysqli_query($con,$query);

header("Location: messages.php"); 
?>
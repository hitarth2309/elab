<?php
session_start();
if(isset($_SESSION['user'])||isset($_SESSION['mail']) ){
    session_unset();
    session_destroy();}
    header('location:index.php');
?>
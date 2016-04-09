<?php
#session starts
session_start();
$rest=$_GET['restaurant'];
unset($_SESSION['$rest']);
header("location:restaurant_signup.php");
?>
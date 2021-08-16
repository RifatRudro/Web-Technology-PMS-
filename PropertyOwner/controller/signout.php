<?php 
session_start();
unset($_SESSION['flag']);
$_SESSION['stat']="Logged Out";
$_SESSION['stat_code']="error";
header('location: ../view/index.php');
?>
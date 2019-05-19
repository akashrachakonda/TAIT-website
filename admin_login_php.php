<?php
session_start();
$_SESSION['login']="y";
$_SESSION['password']="y";
header("location:admin_main.php");
?>

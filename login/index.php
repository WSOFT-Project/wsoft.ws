<?php
session_start();
$_SESSION['url'] = $_GET['url'];
header("location:login.php");
exit;
?>
Please wait.
<?php
session_start();
require_once "config.php";



$now = time();

if (!isset($_SESSION["email"]) && $now > $_SESSION['expire']) 
	{
    echo '<script>alert("Your session has expired, login again.")</script>';
    echo '<script>window.location.replace("index.html")</script>';
	}

else {
   
}
?>
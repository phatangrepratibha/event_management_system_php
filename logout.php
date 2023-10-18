<?php
include "navbar.php";
session_start();
unset($_SESSION['username']);
unset($_SESSION['loggedin']);
header("Location:login.php");
?>
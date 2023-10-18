<?php
include "navbar.php";
session_start();
unset($_SESSION['adminloggedin']);
unset( $_SESSION['adminusername']);
header("Location:home.php");
?>
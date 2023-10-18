<?php
include "pakage.html";
include "db_connect.php";
include "navbar.php";

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
  <link rel="stylesheet" href="style.css">
        <ul>
            <li><a href="userRegister.php">View registered User</a></li>
            <li><a href="manageEvent.php">Manage Events</a></li>
            <li><a href="adminLogOut.php">Admin Log Out</a></li>
        </ul>
    
  </head>
  <body style="background-image: linear-gradient(45deg,#328f8a,#08ac4b)">
    <br>
    <br>
    <center><h1>Welcome To Admin Panel</h1></center>
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="card" >
            <iframe src="https://embed.lottiefiles.com/animation/124648" style="width: 350px; height: 350px;"></iframe>
            </div>
        </div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
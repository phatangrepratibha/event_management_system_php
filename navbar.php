<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
  $loggedin = true;
}
else{
  $loggedin = false;
}
if(isset($_SESSION['adminloggedin']) && $_SESSION['adminloggedin']==true)
{
   $adminloggedin= true;
}
else{

  $adminloggedin =false;
}
echo'
<html>
  <head>
  <link rel="stylesheet" href="style.css">
        <ul>';
        if(!$adminloggedin){
          echo'<li><a href="home.php">Home</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="services.php">Services</a></li>
          ';
          if(!$loggedin)
            {
              echo'
              <li><a href="adminLogin.php">Admin Login</a></li>
              <li><a href="register.php">User Registeration</a></li>
              <li><a href="login.php">User Login</a></li>';
            }
            if($loggedin)
            {
              echo'
              <li><a href="logout.php">Log Out</a></li>';
            }
        }
           echo' 
          </ul>
    </head>
</html>';
?>
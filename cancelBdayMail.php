<?php
include "db_connect.php";
$sql = "SELECT email FROM bday";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    $to_email = $row["email"];
    $subject = "Simple Email Test via PHP";
    $body = "Hello Sir/Mam,
                 We are sorry to inform you that your booking for the Birthday Party
                 have been canceled.Thank you for visting.Please do visit again. ";
    $headers = "From: deogunep@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) 
        {
            echo '<script>alert("Email successfully sent...");window.location.href = "ManageBday.php";</script>';
        } 
        else 
        {
            echo '<script>alert("Email sending failed...");</script>';
        }
    }
}
?>
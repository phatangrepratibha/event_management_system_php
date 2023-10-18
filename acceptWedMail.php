<?php
include "db_connect.php";
$sql = "SELECT email FROM wedding";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
{
  while($row = mysqli_fetch_assoc($result)) 
  {
    $to_email = $row["email"];
    $subject = "Accepting Anniversary Party Booking";
    $body = "Hello Sir/Mam,
                    We are greatful to inform you that your booking for the  Wedding Anniversary
                    have been confirmed .We will contact you very soon for further Details. ";
    $headers = "From: deogunep@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) 
        {
            echo '<script>alert("Email successfully sent...");window.location.href = "ManageAward.php";</script>';
        } 
        else 
        {
            echo '<script>alert("Email sending failed...");</script>';
        }
    }
}
?>
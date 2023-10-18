<?php
include "db_connect.php";
include "navbar.php";
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$day = $_POST["day"];
        $date = $_POST["date"];
		$hour = $_POST["hour"];
        $payment = $_POST["payment"];
		$theme = $_POST["theme"];
        $name = $_POST["name"];
		$phone = $_POST["phone"];
        $person = $_POST["person"];
        $email = $_POST["email"];
        $latitude =$_POST["latitude"];
        $longitude =$_POST["longitude"];
        $email =$_POST["email"];


		$sql = "INSERT INTO `wedding`(`Day`, `Date`,`Hour`, `Payment`, `Theme`, `Name`, `Phone`, `Person`,`email`,`latitude`,`longitude`) VALUES ('$day','$date', '$hour','$payment', '$theme','$name', '$phone','$person','$email','$latitude','$longitude')";

		if (mysqli_query($conn, $sql)) 
		{
			echo '<script>alert("wedding anniversary Party Booking Successfully!!!");</script>';
		} 
		else 
		{
			echo '<script>alert("wedding anniversary Party Booking failed!!! Plzz try again......");window.location.href = "wed.php";</script>';
		}
	}

?>

<html>
<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Poppins', sans-serif;
}
.banner{
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("assets/bg1.jpeg") center/cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding-bottom: 20px;
}
.card-container{
    display: grid;
    grid-template-columns: 420px 420px;
}
.card-img{
    background: url("assets/2.jpeg") center/cover no-repeat;
}
.banner h2{
    padding-bottom: 40px;
    margin-bottom: 20px;
}
.card-content{
    background: #fff;
    height: 700px;
	width:500px;
}
.card-content h3{
    text-align: center;
    color: #000;
    padding: 25px 0 10px 0;
    font-size: 26px;
    font-weight: 500;
}
.form-row{
    display: flex;
    width: 90%;
    margin: 0 auto;
}
.form-row1{
display: flex;
width: 90%;
margin: 0 auto;
}
form select, form input{
    display: block;
    width: 100%;
    margin: 15px 12px;
    padding: 5px;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    border: none;
    border-bottom: 1px solid #eee;
    font-weight: 300;
}
form input[type = text], form input[type = number], form input::placeholder, select{
    color: #9a9a9a;
}
form input[type = submit]{
    color: #fff;
    background: #f2745f;
    padding: 12px 0;
    border-radius: 4px;
    cursor: pointer;
}
form input[type = submit]:hover{
    opacity: 0.9;
}
@media(max-width: 992px){
    .card-container{
        grid-template-columns: 100%;
        width: 100vw;
    }
    .card-img{
        height: 330px;
		width:100px;
    }
}
#map {
        height: 175px;
        width: 100%;
      }
    </style>
        
        
        <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

 <section class = "banner">
            <h2>Book Now</h2>
            <div class = "card-container">
                <div class = "card-img">
                </div>

                <div class = "card-content">
                    <h3>Fill Info</h3>
                    <form>
                        <div class = "form-row">
                            <select name="day" id="day" required>
                                <option value = "day-select" >Select Day</option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select>
                            <div class = "form-row">
                            <input type = "date" name="date" id="date" placeholder=" Date" required>        
                        </div>

                            <select name="hour" id="hour" required>
                                <option value = "hour-select" >Select Hour</option>
                                <option value = "1">1: 00</option>
                                <option value = "1:30">1: 30</option>
                                <option value = "2">2: 00</option>
                                <option value = "2:30">2: 30</option>
                                <option value = "3">3: 00</option>
                                <option value = "3:30">3: 30</option>
                                <option value = "4">4: 00</option>
                            </select>
                        </div>
						 <div class = "form-row1">
                            <select name="payment" id="payment" required>
                                <option value = "day-select" >payment option</option>
                                <option value = "credit">Credit</option>
                                <option value = "debit">Debit</option>
                                <option value = "phone pay">Phone Pay</option>
                                <option value = "cash">Cash</option>
                                
                            </select>
                    
                            <select name="theme" id="theme" required>
                            <option value = "themes">Themes</option>
                                <option value = "classic">Classic</option>
                                <option value = "Retro">Retro</option>
                                <option value = "Royal">Royal</option>
                                <option value = "Pastel">Pastel</option>
                                <option value = "Formal black tie">Formal black tie</option>
                                
                            </select>
                            </div>

                        <div class = "form-row">
                            <input type = "text" name="name" id="name" placeholder="Full Name" required>
                            <input type = "phone" name="phone" id="phone" placeholder="Phone Number" required>
                        </div>

                        <div class = "form-row">
                            <input type = "number" name="person" id="person" placeholder="How Many Persons?" min = "1" required>
                            <input type = "email" name="email" id="email" placeholder="Enter Your Email" required>

                        </div>
                        <div id="map"></div>
                        <div class = "form-row">
                            <input type="text" id="latitude" name="latitude" placeholder="Latitude" readonly>
                            <input type="text" id="longitude" name="longitude" placeholder="Longitude" readonly>
                        </div>
    
    <div class="form-row">
<input type = "submit" value = "BOOK Event" required>
  </div>
  </div>
                    </form>
                </div>
            </div>
        </section>
        
    </form>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 37.7749, lng: -122.4194} // default center
        });

        var marker = new google.maps.Marker({
          map: map,
          draggable: true
        });

        // Add a listener for the click event on the map
        map.addListener('click', function(event) {
          marker.setPosition(event.latLng);
          document.getElementById('latitude').value = event.latLng.lat();
          document.getElementById('longitude').value = event.latLng.lng();
        });
      }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLrCH3SbZCo7dbLGysty7qGpDPd-cPPt0&callback=initMap"></script>

</body>
</html>
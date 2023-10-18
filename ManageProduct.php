<?php
include "db_connect.php";
include "adminNavbar.php";
$sql = "SELECT * FROM product";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #000000;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color:  #d9b3ff;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 5px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Manage Product Launch Booking's</h1>
		<table>
			<tr>
				<th>Day</th>
				<th>Date</th>
				<th>Hour</th>
				<th>Payment</th>
				<th>Theme</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Person</th>
				<th>Email</th>
				<th>latitude</th>
				<th>longitude</th>
				<th>Action</th>  
			</tr>
			<?php
				
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['Day'];?></td>
				<td><?php echo $rows['Date'];?></td>
				<td><?php echo $rows['Hour'];?></td>
				<td><?php echo $rows['Payment'];?></td>
				<td><?php echo $rows['Theme'];?></td>
				<td><?php echo $rows['Name'];?></td>
				<td><?php echo $rows['Phone'];?></td>
				<td><?php echo $rows['Person'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['latitude'];?></td>
				<td><?php echo $rows['longitude'];?></td>
				<td><input type="submit" onClick="location.href='acceptProductMail.php'" value="Accept">
				<input type="submit" onClick="location.href='cancelProductMail.php'" value="Cancel"></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
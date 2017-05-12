<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="./stylesheet/styles.css" rel="stylesheet" type = "text/css" media="screen">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Our Services</title>
    </head>
    <body style="background-color: #99d8e8">

	<div class="container" style="background-color: #ffffff">
	<!--header-->
	<div class="container">
		<img src="stylesheet/image/logo.png" alt="logo">
	</div>
	<!--header end-->
	
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="success.php">You are Logged in as <?php session_start(); print_r($_SESSION['myemail']); ?></a></li>
				<li><a href="#services"><span class="glyphicon glyphicon-dog"></span>Services</a></li>
				<li><a href="#spPart">Service Provider</a></li>
				<li><a href='chooseservice.php'>Make a Reservation</a></li>
				<li><a href='reservation.php'>Upcoming Reservations</a></li>
				<li><a href='logout.php'>Log out</a></li>
			</ul>
		</div>
	</nav>
	<h3>Services Offered</h3>
    <?php
    	require 'fragments/dbcon.php';

    	$sql = "SELECT * FROM service";
    	$result = mysqli_query($db, $sql);

    	if ($result->num_rows > 0) 
    	{
	    	echo "<table class='table table-striped'><tr><th>ID</th><th>Name</th><th>Price</th><th></th></tr>";
	    	// output data of each row
	    	while($row = $result->fetch_assoc()) 
	    	{
        		echo "<tr><td>".$row["service_id"]."</td><td>".$row["service_name"]."</td><td> ".$row["price"]."</td><td><a href='storeservice.php?id=".$row["service_id"]."' class='btn-primary btn-sm'>Choose</a></td></tr>";
    		}
    			echo "</table>";		
		} 
		else 
		{
    		echo "0 results";
		}
    ?>
     </div>  
    </body>
</html>

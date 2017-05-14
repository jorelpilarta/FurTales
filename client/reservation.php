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
	<div align="center">
<img src="images/banner.png" alt="logo" style="height:150px; width: 400px">
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
	<h3>Upcoming Reservation</h3>
	
    <?php
    	require 'fragments/dbcon.php';
        
        $cid = $_SESSION['myvar'];

    	$sql = "SELECT * FROM client NATURAL JOIN transaction NATURAL JOIN service NATURAL JOIN sprice WHERE client_id='$cid' AND payment_status='Not Paid' AND request_status='Accepted' ORDER BY transactions_date ASC";
    	$result = mysqli_query($db, $sql);

    	if ($result->num_rows > 0) 
    	{
	    	echo "<table class='table table-striped'><tr><th>Service</th><th>Service Provider ID</th><th>Price</th><th>Date</th><th>Time</th></tr>";
	    	// output data of each row
	    	while($row = $result->fetch_assoc()) 
	    	{
        		echo "<tr><td>".$row["service_name"]."</td><td>".$row["staff_id"]."</td><td> ".$row["price"]."</td><td> ".$row["transactions_date"]."</td><td> ".$row["transaction_time"]."</td></tr>";
    		}
    			echo "</table>";		
		} 
		else 
		{
    		echo "0 results";
		}
    ?>
    <a href="success.php" class = "btn btn-default btn-sm" role="button">Back to Home</a>
       <br></br>
    </body>
</html>

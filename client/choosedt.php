<?php
	require 'fragments/getset.php';

	$staffid = $_GET['staffid'];
	$price = $_GET['price'];
    session_start();
    array_push($_SESSION['transaction'],$staffid);
    array_push($_SESSION['transaction'],$price);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="./stylesheet/styles.css" rel="stylesheet" type = "text/css" media="screen">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Fur Tales</title>
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
				<li><a href="success.php">You are Logged in as <?php print_r($_SESSION['myemail']); ?></a></li>
				<li><a href='chooseservice.php'>Make a Reservation</a></li>
				<li><a href='reservation.php'>Upcoming Reservations</a></li>
				<li><a href='logout.php'>Log out</a></li>
			</ul>
		</div>
	</nav>
	
	<h3>Choose a Date</h3>
	<h4>Choose a specific date and time for your service.</h4>

        <form action="review.php" method="GET">
            <label>Choose a date:</label>
            <input type="date" name="date">
            <br>
            <label>Choose a time:</label>
            <input type="time" name="time">
            <br></br>
            <input type="submit">
        </form>
    <br></br>
	</div>
    </body>
</html>
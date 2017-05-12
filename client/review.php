<?php
    require 'fragments/getset.php';

    $date = $_GET['date'];
    $time = $_GET['time'];

    session_start();
    array_push($_SESSION['transaction'],$date);
    array_push($_SESSION['transaction'],$time);
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
	<div class="container">
		<img src="stylesheet/image/logo.png" alt="logo">
	</div>
	<!--header end-->
		
        <?php
        require 'fragments/dbcon.php';
        $serviceid = $_SESSION['transaction'][0];
        $serviceproviderid = $_SESSION['transaction'][1];


        $sql = "SELECT * FROM service WHERE service_id='$serviceid'";
        $result = mysqli_query($db, $sql);
        $row = $result->fetch_assoc();

        $sql2 = "SELECT * FROM service_provider WHERE staff_id='$serviceproviderid'";
        $result2 = mysqli_query($db, $sql2);
        $row2 = $result2->fetch_assoc();
        ?>

		<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="#home">You are Logged in as <?php print_r($_SESSION['myemail']); ?></a></li>
				<li><a href="#services"><span class="glyphicon glyphicon-dog"></span>Services</a></li>
				<li><a href="#spPart">Service Provider</a></li>
				<li><a href='chooseservice.php'>Make a Reservation</a></li>
				<li><a href='reservation.php'>Upcoming Reservations</a></li>
				<li><a href='logout.php'>Log out</a></li>
			</ul>
		</div>
		</nav>
	
		<div class="container">
        <h3>Booking Confirmation </h3>
        <p> Service: <?php echo $row["service_name"]?> </p>
        <br>
        <p> Price: ₱<?php echo $row["price"]?>.00 </p>
        <br>
        <p> Service Provider: <?php echo $row2["first_name"]?> <?php echo $row2["last_name"]?> </p>
        <br>
        <p> Date: <?php echo $_SESSION['transaction'][2];?> </p>
        <br>
        <p> Time: <?php echo $_SESSION['transaction'][3];?> </p>
        <br></br>

        <form action="booksuccess.php" method="POST">
            <input type="submit" value=" Confirm Booking">
        </form>
		<br>
		</div>	
		
		</div>
    </body>
</html>

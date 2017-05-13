<?php
    session_start();
    $clientid = $_SESSION['myvar'];
    $serviceid = $_SESSION['transaction'][0];
    $spid = $_SESSION['transaction'][1];
    $price = $_SESSION['transaction'][2];
    $date = $_SESSION['transaction'][3];
    $time = $_SESSION['transaction'][4];
    echo print_r($_SESSION['transaction']);

    require 'fragments/dbcon.php';
    $sql = "SELECT * FROM service NATURAL JOIN sprice WHERE service_id='$serviceid' AND staff_id='spid'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();

    $insert = "INSERT INTO transaction (client_id, service_id, staff_id, transactions_date, transaction_time, price) VALUES ('$clientid', '$serviceid', '$spid', '$date', '{$time}:00', '$price')";
    if(mysqli_query($db, $insert))
    {
        echo "";
    }
    else
    {
        echo "Please repeat reservation";
    }
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
	
	<div class="container">
		<img src="stylesheet/image/logo.png" alt="logo">
	</div>
	
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
	
		<h1>THANK YOU FOR choosing Furtales.</h1>
		<h2>Please wait for your booking to be accepted. Thank You!</h2>
		
		<p><a href="success.php" class="btn-primary btn-sm">Back to Home</a></p>
		<p><a type="submit" href="chooseservice.php" class="btn-primary btn-sm">Make Another Transaction</a></p>
		<br></br>
		
		<?php
        $_SESSION['transaction'] = [];
        ?>
    
	</div>
</body>
</html>

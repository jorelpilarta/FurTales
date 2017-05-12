<?php
	require 'fragments/getset.php';

	$id = $_GET['id'];

    session_start();
	$_SESSION['transaction'] = [$id];
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
	
	<!--top navigation bar-->
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
	
    <?php
        require 'fragments/dbcon.php';

        $sql = "SELECT * FROM service_provider NATURAL JOIN sp_details";
        $result = mysqli_query($db, $sql);
    ?>
        <table class="table table-striped">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
            <tr>    
                <td><img src="images/<?php echo $row['sp_email']; ?>.jpeg" />
                <br>
                <?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><a href='choosedt.php?staffid=<?php echo $row['staff_id']; ?>' class='btn-primary btn-sm'>Choose</a></td>
            </tr>
            <?php } ?>
        </table>
        
    </body>
</html>
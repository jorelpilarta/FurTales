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
	
	<!--top navigation bar-->
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<ul class="nav navbar-nav">
				<li><a href="#home">You are Logged in as <?php session_start(); print_r($_SESSION['myemail']); ?></a></li>
				<li><a href="#services"><span class="glyphicon glyphicon-dog"></span>Services</a></li>
				<li><a href="#spPart">Service Provider</a></li>
				<li><a href='chooseservice.php'>Make a Reservation</a></li>
				<li><a href='reservation.php'>Upcoming Reservations</a></li>
				<li><a href='logout.php'>Log out</a></li>
			</ul>
		</div>
	</nav>
	
	<div class="container" id="home">
	<h3>Furtales</h3>
	<p>WELCOME! We are Furtales, a FRIENDLY and TRUSTWORTHY pet service company that care about your pet. 
	We offer some services like pet grooming, pet walks, and even pet trainings. So if you dont have time for your pet,
	inquire now and let your pet enjoy its life!</p>
	</div>

	<hr></hr>
	
	<div class="container" style="padding-top: 20px">
	<h3>Services Offered</h3>
	<p>Below are the services offered and its description. So inquire now and let us take care of your pet.</p>
	</div>
	
	<div class="container" id="services">
	<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Dog trips</h4>
      <ul>
		<li>30 mins walk</li>
		<li>45 mins walk</li>
		<li>1 hr walk</li>
		<li>Park trip</li>
	  </ul>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Pet Styling</h4>
		<li>Full Style and Groom</li>
		<li>Showering</li>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Health Check</h4>
		<li>Regular check-up</li>
		<li>Oral check</li>
		<li>Vaccination</li>
		<li>Anti-rabies injection</li>
	  </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Boarding Services</h4>
		<li>30 mins visit</li>
		<li>1 hour visit</li>
		<li>Day stay</li>
		<li>Overnight stay</li>
		<li>Overnight stay</li>
		<li>Poop cleaning/scooping</li>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Pet Training</h4>
		<li>Potty training</button></li>
		<li>Discipline training</li>
	</div>
	</div>
	</div>
	
	<div class="container-fuild">
	<h3>Service Provider</h3>
	<p>Here are the top list of our service provider. Log in to the website to inquire.</p>
	</div>
   <div class="container" id="spPart">
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="images/liwanag.john1234@gmail.com.jpg" class="img-circle" alt="sp1" width="220" height="220">
	  <p>John Derick Liwanag</p>
      <p>Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah</p>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="images/mendezcamila@gmail.com.jpg" class="img-circle" alt="sp1" width="220" height="220">
	  <p>Camilla Mendez</p>
      <p>Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah</p>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
	  <p>Service Provider 1</p>
      <p>Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah</p>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
	  <p>Service Provider 2</p>
      <p>Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah Blah</p>
    </div>
</div>
</div>
	
<hr></hr>
	<div class="container-fluid">
	<div class="panel panel-default">
    <div class="panel-footer"><p class="text-center"><span class="glyphicon glyphicon-copyright-mark">2017 Furtales Pet Service, Inc. All rights reserved. Furtales.com is a trademark of Furtales Pet Services Co.</span></p></div>
	</div>
	</div>
</div>

    </body>
</html>

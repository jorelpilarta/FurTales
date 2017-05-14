<!DOCTYPE html>
<html lang="en">
<head>
  <title>Furtales</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="./stylesheet/styles.css" rel="stylesheet" type = "text/css" media="screen">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #99d8e8">
<div class="container" style="background-color: #ffffff">
<!--header-->
<div class="container">
<img src="/stylesheet/image/logo.png" alt="logo">
</div>
<!--header end-->

<!--top main navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="#home"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="#services"><span class="glyphicon glyphicon-dog"></span>Services</a></li>
      <li><a href="#spPart">Service Provider</a></li>
	  <li><a href="#register">Register</a></li>
    </ul>
    </ul>
	 <form class="navbar-form navbar-right" action="login.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <button value="Login" name="submit" type="submit" class="btn btn-default">Log In</button>
     </form>
  </div>
</nav>
<!--end of nav-->
<div class="container" id="home">
	<h3>Furtales</h3>
	<p>WELCOME! We are Furtales, a FRIENDLY and TRUSTWORTHY pet service company that care about your pet. 
	We offer some services like pet grooming, pet walks, and even pet trainings. So if you dont have time for your pet,
	inquire now and let your pet enjoy its life!</p>
</div>

<!--carousel-->
<div>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="stylesheet/image/training.jpg" alt="training" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="stylesheet/image/walk.jpg" alt="walk" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="stylesheet/image/grooming.jpg" alt="groom" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--end of carousel-->

<hr></hr>

<div class="container">
	<h3>Services Offered</h3>
	<p>Below are the services offered and its description. So inquire now and let us take care of your pet.</p>
</div>
<div class="container" id="services">
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Dog trips</h4>
		<li>30 mins walk</li>
		<li>45 mins walk</li>
		<li>1 hr walk</li>
		<li>Park trip</li>
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
		<li>General check-up</li>
		<li>Oral check</li>
		<li>Vaccination</li>
		<li>Anti-rabies injection</li>
	  </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-rounded" alt="sp1" width="220" height="220">
	  <h4>Pet Training</h4>
		<li>Potty training</button></li>
		<li>Discipline training</li>

	</div>
</div>
</div><!--end of service offered div-->

<div class="container-fuild">
	<h3>Service Provider</h3>
	<p>Here are the top list of our service provider. Log in to the website to inquire.</p>
</div>
<div class="container" id="spPart">
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
      <p>Hi, My name is Delacruz, Juan. My Specialty is with dogs in general.
	  I can handle dogs with aggresive attitude and I can also train them. Inquire for more information.</p>
    </div>
	   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
      <p>Hello child, I am thy creator of this world and you and your animals and all the things you see.
	  Inquire inside and follow me to make your pet's life like heaven.</p>
    </div>
	   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
      <p>Here is the simple description of the service provider</p>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
      <p>We are Furtales and we  make your pets life beautiful.
	  </p>
    </div>
</div>
</div><!--end of div for the whole sp page-->

<hr></hr>

<div class="container-fluid">
<div class="row">
<div class="col-md-6" style="background-color: d4d4d4">
  <form class="form-horizontal" id="register" action="/action_page.php">
    <h3>Client Registration</h3>
    <div class="form-group">
      <label class="control-label col-sm-3" for="Last Name">Last Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="rLName" placeholder="Enter last name" name="pName">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="First Name">First Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="rFName" placeholder="Enter first name" name="pName">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="HomeAddress">Home Address:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="Address" placeholder="Enter Address" name="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
	 </div>
	  <div class="form-group">
      <label class="control-label col-sm-3" for="Contact Number">Contact Number:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="contactNumber" placeholder="Enter Contact Number" name="ContactNumber">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-12">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</div>
</form><!--end of client registration-->

<div class="col-md-6" style="background-color: d4d4d4"><!--start of sp registration-->
  <h3>Service Provider Registration</h3>
  <form class="form-horizontal" id="register" action="/action_page.php">
  <div class="form-group">
      <label class="control-label col-sm-3" for="IDNumber">ID:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="rFID" placeholder="" name="pID">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="Last Name">Last Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="rFName" placeholder="Enter last name" name="pName">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="First Name">First Name:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="rLName" placeholder="Enter first name" name="pName">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="sID">Service ID:</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="#" placeholder="" name="sID">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="email">Email:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-3" for="Contact Number">Contact Number:</label>
      <div class="col-sm-6">
        <input type="email" class="form-control" id="contactNumber" placeholder="Enter Contact Number" name="ContactNumber">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Password:</label>
      <div class="col-sm-6">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-12">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
</div>
</form>



</div><!--end of class row-->
</div><!--end of log in source code-->
<hr></hr>
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-footer"><p class="text-center"><span class="glyphicon glyphicon-copyright-mark">2017 Furtales Pet Service, Inc. All rights reserved. Furtales.com is a trademark of Furtales Pet Services Co.</span></p></div>
  </div>
</div><!--end of the main container-->
<!--last line of the body! 
	Do not be confuse-->
	

</div>
</body>
</html>

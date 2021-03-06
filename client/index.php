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
<div align="center">
<img src="images/banner.png" alt="logo" style="height:150px; width: 400px">
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
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
	  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
	  laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
	  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
	  sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
      <img src="stylesheet/image/sp.jpg" class="img-circle" alt="sp1" width="220" height="220">
	  <p>Service Provider 2</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
	  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
	  laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
	  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
	  sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
</div><!--end of div for the whole sp page-->

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

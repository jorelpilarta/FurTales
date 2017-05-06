<?php
session_start();
if (isset($_SESSION["username"])) {
	if ($_SESSION["position"] != 'supply officer') {
		$url='request.php';
	} else {
		$url='review.php';
	}
    header("Location: $url");
    die();
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="booking">
  <!--  <link href="css/index-style.css" rel="stylesheet">-->
    <title>Choose Date for Grooming</title>
</head>

<body>
	<div>
		<!--<?php
		//include '../frag/head.html';
		?> -->
		<form method="POST" action="php/schedule.php">
			<div>
				<p>Month</p>
				<input name="month" type="text" required>
			</div>
			<div>
				<p>Day</p>
				<input name="day" type="text" required>
			</div>
			<div>
				<p>Year</p>
				<input name="year" type="text" required>
			</div>

			<!--<input type="button" onclick="window.open('.php', '_self');" value="sign up">-->
			<input type="submit" value="Next">
		</form>
	</div>

	<?php
   // require 'database.php';
    session_start();
    
    $product = $_POST['product'];
    $taker = $_SESSION['username'];
    $dateSent = date("Y-m-d");
    $reason = $_POST['r2'];
    $quantity = $_POST['quantity'];    

    $sql = "INSERT INTO request(product,taker,dateSent,reason,quantity) VALUES ('$product', '$taker', '$dateSent', '$reason', '$quantity')";

    if (mysqli_query($database, $sql)) {
    include 'sent.php';

} else {
    include 'request.php';
}

?> 
	<!--<?php
//include '../frag/res.html';
?> -->
</body>
</html>
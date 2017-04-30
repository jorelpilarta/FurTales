<?php
    
    //include 'connect.php';
    include 'index.html'; //specify path for index.html

    session_start();
    
    //Connect to the server and to the database
    $database = mysqli_connect("localhost", "root", "", "databasename");
    if ($database->connect_error) {
		die("Connection failed: " . $database->connect_error);
	}

    /*
    // Connect to the database
    $database = "//databasename//";
    @mysql_select_db($database, $connect);
    if (!$connect) {
        die('Not connected: ' . mysql_error());
    }
    */
    
    // Define $username and $password 
	$client_email=$_POST['client_email']; 
	$client_pw=md5($_POST['client_pw']);

    /*
	$client_email = stripslashes($client_email);
	$client_pw = stripslashes($client_pw);
	$client_email = mysqli_real_escape_string($database, $client_email);
	$client_pw = mysqli_real_escape_string($database, $client_pw);
    */

	$sql="SELECT client_pw, client_email FROM client WHERE client_email='$client_email'";
	$result=mysqli_query($database, $sql);

    // Count the table rows
	$count=mysqli_num_rows($result);

	// Table row must be 1 row if result matched $username and $password
	if($count == 1){
        $row = mysqli_fetch_assoc($result);
		if ($client_pw == $row['client_pw']){
            $_SESSION['client_email']="$client_email";
		    //header('');
		    return true;
        }
		else {
			echo 'alert("Incorrect details\n\nTry again.");';
		    return false;
		}
    }
	else{
		echo "$client_email";
		echo "$client_pw";
		echo "$count";
		echo 'alert("You are not a registered Customer!\n\nSign-up to register.");';
	}

?>
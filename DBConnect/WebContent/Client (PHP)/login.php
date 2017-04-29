<?php
    
    //include 'connect.php';
    include 'index.html'; //specify path for index.html

    session_start();
    
    //
    $database = mysqli_connect("localhost", "root", "", "databasename");
    if ($database->connect_error) {
		die("Connection failed: " . $database->connect_error);
	}
    
    // Define $username and $password 
	$sp_email=$_POST['sp_email']; 
	$sp_pw=md5($_POST['sp_pw']);

    /*
	$sp_email = stripslashes($sp_email);
	$sp_pw = stripslashes($sp_pw);
	$sp_email = mysqli_real_escape_string($database, $sp_email);
	$sp_pw = mysqli_real_escape_string($database, $sp_pw);
    */

	$sql="SELECT sp_pw, sp_email FROM client WHERE sp_email='$sp_email'";
	$result=mysqli_query($database, $sql);

    // Count the table rows
	$count=mysqli_num_rows($result);

	// Table row must be 1 row if result matched $username and $password
	if($count == 1){
        $row = mysqli_fetch_assoc($result);
		if ($sp_pw == $row['sp_pw']){
            $_SESSION['sp_email']="$sp_email";
		    //header('');
		    return true;
        }
		else {
			echo 'alert("Incorrect details\n\nTry again.");';
		    return false;
		}
    }
	else{
		echo "$sp_email";
		echo "$sp_pw";
		echo "$count";
		echo 'alert("You are not a registered Customer!\n\nSign-up to register.");';
	}

?>
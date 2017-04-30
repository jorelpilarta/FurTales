<?php
    
    //include 'connect.php';
    include 'register.html';
    
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

    // Capture the database
    $client_name=$_POST['client_name'];
    $client_email=$_POST['client_email'];
    $client_pw=$_POST['client_pw'];
    $client_number=$_POST['client_number'];
    $client_add=$_POST['client_add'];

    // Insert to the database
    $query = "INSERT into thsw1f(client_name, client_email, client_pw, client_number, client_add) VALUES('$client_name','$client_email','$client_pw','$client_number','$client_number')";

    // Execute
    if (mysql_query($query))
    {
        echo "Registration is successful. Please wait for the Administrator's approval.";
    }
    else
        echo "Registration failed.";
?>
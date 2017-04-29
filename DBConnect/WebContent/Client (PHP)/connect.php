<?php
    // Create connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "petservice";
    $connect = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    /*
    // Connect to the database
    $database = "//databasename//";
    @mysql_select_db($database, $connect);
    if (!$connect) {
        die('Not connected: ' . mysql_error());
    }
    */

?>
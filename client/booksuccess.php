<?php
    session_start();
    $clientid = $_SESSION['myvar'];
	$serviceid = $_SESSION['transaction'][0];
    $spid = $_SESSION['transaction'][1];
    $date = $_SESSION['transaction'][2];
    $time = $_SESSION['transaction'][3];

    require 'fragments/dbcon.php';
    $sql = "SELECT * FROM service WHERE service_id='$serviceid'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
    $price = $row["price"];

    $insert = "INSERT INTO transaction (client_id, service_id, staff_id, transactions_date, transaction_time) VALUES ('$clientid', '$serviceid', '$spid', '$date', '{$time}:00')";
    if(mysqli_query($db, $insert))
    {
        echo "Please wait for your booking to be accepted. Thank you!";
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
        <title>Please Wait</title>
    </head>
    <body>
        <p><a href="success.php">Back to Home</a></p>
        <?php
        $_SESSION['transaction'] = [];
        ?>
    
    </body>
</html>
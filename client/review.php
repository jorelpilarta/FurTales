<?php
    require 'fragments/getset.php';

    $date = $_GET['date'];
    $time = $_GET['time'];

    session_start();
    array_push($_SESSION['transaction'],$date);
    array_push($_SESSION['transaction'],$time);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Booking Review</title>
    </head>
    <body>

        <?php
        require 'fragments/dbcon.php';
        $serviceid = $_SESSION['transaction'][0];
        $serviceproviderid = $_SESSION['transaction'][1];


        $sql = "SELECT * FROM service WHERE service_id='$serviceid'";
        $result = mysqli_query($db, $sql);
        $row = $result->fetch_assoc();

        $sql2 = "SELECT * FROM service_provider WHERE staff_id='$serviceproviderid'";
        $result2 = mysqli_query($db, $sql2);
        $row2 = $result2->fetch_assoc();
        ?>

        <h1>Booking Confirmation </h1>
        <p> Service: <?php echo $row["service_name"]?> </p>
        <br>
        <p> Price: ₱<?php echo $row["price"]?>.00 </p>
        <br>
        <p> Service Provider: <?php echo $row2["first_name"]?> <?php echo $row2["last_name"]?> </p>
        <br>
        <p> Date: <?php echo $_SESSION['transaction'][2];?> </p>
        <br>
        <p> Time: <?php echo $_SESSION['transaction'][3];?> </p>
        <br>

        <form action="booksuccess.php" method="POST">
            <input type="submit" value=" Confirm Booking">
        </form>

    </body>
</html>

<?php
	require 'fragments/getset.php';

	$staffid = $_GET['staffid'];
    session_start();
    array_push($_SESSION['transaction'],$staffid);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fur Tales</title>
    </head>
    <body>
        <?php 
        print_r($_SESSION['transaction']);
        ?>
        <form action="review.php" method="GET">
            <label>Choose a date:</label>
            <input type="date" name="date">
            <br>
            <label>Choose a time:</label>
            <input type="time" name="time">
            <br>
            <input type="submit">
        </form>
    
    </body>
</html>
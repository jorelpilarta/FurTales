<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Upcoming Reservations</title>
    </head>
    <body>
    <?php
    	require 'fragments/dbcon.php';
        session_start();
        $cid = $_SESSION['myvar'];

    	$sql = "SELECT * FROM client NATURAL JOIN transaction NATURAL JOIN service NATURAL JOIN sprice WHERE client_id='$cid' AND payment_status='Not Paid' AND request_status='Accepted' ORDER BY transactions_date ASC";
    	$result = mysqli_query($db, $sql);

    	if ($result->num_rows > 0) 
    	{
	    	echo "<table border='1'><tr><th>Service</th><th>Service Provider ID</th><th>Price</th><th>Date</th><th>Time</th></tr>";
	    	// output data of each row
	    	while($row = $result->fetch_assoc()) 
	    	{
        		echo "<tr><td>".$row["service_name"]."</td><td>".$row["staff_id"]."</td><td> ".$row["price"]."</td><td> ".$row["transactions_date"]."</td><td> ".$row["transaction_time"]."</td></tr>";
    		}
    			echo "</table>";		
		} 
		else 
		{
    		echo "0 results";
		}
    ?>
    <p><a href="success.php">Back to Home</a></p>
        
    </body>
</html>

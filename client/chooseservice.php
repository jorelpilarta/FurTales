<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Our Services</title>
    </head>
    <body>
    <?php
    	require 'fragments/dbcon.php';

    	$sql = "SELECT * FROM service";
    	$result = mysqli_query($db, $sql);

    	if ($result->num_rows > 0) 
    	{
	    	echo "<table><tr><th>ID</th><th>Name</th><th>Price</th></tr>";
	    	// output data of each row
	    	while($row = $result->fetch_assoc()) 
	    	{
        		echo "<tr><td>".$row["service_id"]."</td><td>".$row["service_name"]."</td><td> ".$row["price"]."</td><td><a href='storeservice.php?id=".$row["service_id"]."'>Choose</a></td></tr>";
    		}
    			echo "</table>";		
		} 
		else 
		{
    		echo "0 results";
		}
    ?>
        
    </body>
</html>

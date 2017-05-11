<?php
	require 'fragments/getset.php';

	$id = $_GET['id'];

    session_start();
	$_SESSION['transaction'] = [$id];
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
        
        <?php
        require 'fragments/dbcon.php';

        $sql = "SELECT * FROM service_provider NATURAL JOIN sp_details";
        $result = mysqli_query($db, $sql);

        if ($result->num_rows > 0) 
        {
            echo "<table><tr><th>   </th><th>  </th><th>   </th></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                echo "<tr><td>IMAGE</td><td>".$row["first_name"]."</td><td> ".$row["description"]."</td><td><a href='choosedt.php?staffid=".$row["staff_id"]."'>Choose</a></td></tr>";
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
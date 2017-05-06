<!DOCTYPE html>
<html>
<head>
	<title>overview</title>
</head>
<body>

    <form action="confirm.php" method="GET">			
        <p>You have chosen to book:</p>
    
        <?php
            mysql_connect("localhost", "root", "");
            mysql_select_db("get_data");

            $sql = mysql_query("SELECT * FROM furtaleschema ORDER BY date");
            $time='time';
            $service='service';
            $provider='provider';
            

            while($rows = mysql_fetch_assoc($sql)){
            echo 'Time ' . $rows['$time'] . '<br/>' . 'Service: ' . $rows['service'] . '<br/>' . 'Provider' . $rows['provider']
            }
        ?>
        <input type="submit" value="Book">
        <input type="button" onclick="window.open('.php', '_self');" value="Back">-->
            
    </form>
</body>


</html>
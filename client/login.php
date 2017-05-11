<?php
require 'fragments/dbcon.php';


if (isset($_POST['submit']))
{
    $em = $_POST['email'];
    $pw = $_POST['password'];
 
    $sql = "SELECT * FROM `client` WHERE client_email='$em' and password='$pw'";
    $result = mysqli_query($db, $sql) or die(mysql_error());
    $row = $result->fetch_assoc();
    $count = mysqli_num_rows($result);
    $cid = $row["client_id"];
    if ($count == 1)
    {
        session_start();
        $_SESSION['myemail'] = $em;
        $_SESSION['myvar'] = $cid;
        $_SESSION['transaction'] = [];
        echo "You are logged in";
        header('Location: success.php');
    }
    else 
    {
        echo "Login Failed";
    }
}

?>

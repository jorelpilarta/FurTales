<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Fur Tales</title>
    </head>
    <body>
        <p> You are logged in as <?php session_start(); print_r($_SESSION['myemail']); ?>
        <p><a href='chooseservice.php'>Make a reservation</a></p>
        <p><a href='reservation.php'>Upcoming Reservations</a></p>
        <p><a href='logout.php'>Log out</a></p>

    </body>
</html>

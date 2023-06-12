<?php
session_start();

include("Database_connect.php");
include("functie.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>My website</title>
</head>
<body>

<a href="Logout.php">Logout</a>
<h1>This is the index page</h1>

<br>
Hello, <?php echo $user_data['gebruiker_naam']; ?>
</body>
</html>

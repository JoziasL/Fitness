<?php
require '../inlog voorbeeld/db_conn.php';
session_start();

// Controleer of de gebruiker is ingelogd
//if (!isset($_SESSION["username"])) {
//    // Gebruiker is niet ingelogd, doorsturen naar de inlogpagina
//    header("Location: index.php");
////    exit();
//}

// Gebruiker is ingelogd, haal de gebruikersnaam op uit de sessie
$username = $_SESSION["username"];

// Controleer of de gebruiker is ingelogd
$loggedIn = false;
if (isset($_SESSION["username"])) {
    $loggedIn = true;
}

// Logout functionaliteit
if (isset($_POST["logout"])) {
    // Uitloggen door de sessie te verwijderen
    session_destroy();
    // Doorsturen naar de inlogpagina of een andere gewenste locatie
    header("Location: index.php");
//    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitNess - Home | By Code Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <i class="fas fa-dumbbell"></i>FitNess
    </a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="contact.php">Contact</a>
        <?php if ($loggedIn) { ?>
            <a href="#">Profile</a>
            <a href="../inlog%20voorbeeld/logout.php">logout</a>
        <?php } else { ?>
            <li><a href="../inlog%20voorbeeld/login.php">Login</a></li>
            <li><a class="btn" href="../inlog%20voorbeeld/registration.php">Register</a></li>
        <?php } ?>    </nav>
</header>

<section class="home">
    <div class="max-width">
        <div class="home-content">
            <h3>help for ideal <br> body fitness</h3>
            <p>Beste site voor jouw training workouts.</p>
            <button class="btn" >Get started</button>
        </div>
        <div class="home-image">
            <img src="../images/arnold.png" alt="">
        </div>
    </div>
</section>
</body>
</html>
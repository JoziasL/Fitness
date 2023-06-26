
<?php
require 'db_conn.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: ../project%20website/index.php");


session_start();

// Controleer of de gebruiker is ingelogd
if (isset($_SESSION["username"])) {
    // Gebruiker is ingelogd, dus vernietig de sessie
    session_destroy();
    // Doorsturen naar de index pagina
    header("Location: ../project%20website/index.php");
    exit();
}

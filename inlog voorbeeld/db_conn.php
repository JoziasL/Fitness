<?php
$servername = "localhost";
$dbname = "fitness";
$username = "root";
$password = "root";
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",
        $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connectie gelukt <br />";
} catch (PDOException $e) {
    echo "Connectie mislukt: " . $e->getMessage();
}
?>


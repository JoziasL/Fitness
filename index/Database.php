<?php

$host = "localhost";
$databaseName = "myDatabaseName";
$username = "myUsername";
$password = "myPassword";

$dsn = "mysql:host=$host;dbname=$databaseName";

try {
    $databaseConnection = new PDO($dsn, $username, $password);
    echo "Connection successful.";
} catch (PDOException $error) {
    if($error->getCode() == 1045) {
        echo "Connection failed due to incorrect login details";
    } else {
        echo "Connection failed with error code " . $error->getCode();
    }
}
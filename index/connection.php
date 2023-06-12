<?php

<<<<<<< HEAD:index/Database.php
class Database
{
//    private $username, $password, $IP, $DBName;
    private $dbConnectie;
    public function __construct($IP, $username, $password, $DBNameInitial){
//        $this->IP = $IP;
//        $this->username = $username;
//        $this->password = $password;
//        $this->DBName = $DBNameInitial;
        try {
            $this->dbConnectie = new PDO("mysql:host=" . $IP . ";dbname=" . $DBNameInitial,
                $username, $password);
        } catch (PDOException $e){
            die("Error!: " . $e->getMessage());
        }
    }

    function SQLMetResult($commando, $values = []){
        $query = $this->dbConnectie->prepare($commando);
        $query->execute($values);
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
=======

$host = "localhost";
$databaseName = "myDatabaseName";
$username = "myUsername";
$password = "myPassword";

$dsn = "mysql:host=$host;dbname=$databaseName";

try {
    $databaseConnection = new PDO($dsn, $username, $password);
    echo "Connection successful.";
} catch (PDOException $error) {
    if ($error->getCode() == 1045) {
        echo "Connection failed due to incorrect login details";
    } else {
        echo "Connection failed with error code " . $error->getCode();
>>>>>>> main:index/connection.php
    }
}
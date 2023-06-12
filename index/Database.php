<?php

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
    }
}
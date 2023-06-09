<?php
class User {
    private $id;
    private $username;
    private $password;
    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }
    public function getId() {
        return $this->id;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function setUsername($username) {
        $this->username = $username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function save() {
        $db = new Database();
        $sql = "INSERT INTO users (username, password) VALUES ('$this->username', '$this->password')";
        $db->query($sql);
        $this->id = $db->lastInsertId();
    }
    public static function findById($id) {
        $db = new Database();
        $sql = "SELECT * FROM users WHERE id=$id";
        $result = $db->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return new User($row['username'], $row['password']);
        } else {
            return null;
        }
    }
    public static function findByUsername($username) {
        $db = new Database();
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = $db->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            return new User($row['username'], $row['password']);
        } else {
             return null;
        }
    }
    public function update() {
        $db = new Database();
        $sql = "UPDATE users SET username='$this->username', password='$this->password' WHERE id=$this->id";
        $db->query($sql);
    }
    public function delete() {
        $db = new Database();
        $sql = "DELETE FROM users WHERE id=$this->id";
        $db->query($sql);
    }
}
class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    public function connect() {
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$conn) {
            die("Could not connect to database: " . mysqli_connect_error());
        }
        return $conn;
    }
    public function query($sql) {
        $conn = $this->connect();
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        return $result;
    }
}
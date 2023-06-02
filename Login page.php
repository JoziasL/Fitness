<link rel="stylesheet" href="style.css">
<form method="post" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Log In">
</form>

<?php
session_start();

// Get form input values
$username = $_POST['username'];
$password = $_POST['password'];

// Connect to database and validate login credentials
$dsn = "mysql:host=localhost;dbname=mydatabase";
$user = "myusername";
$pass = "mypassword";
try {
    $dbh = new PDO($dsn, $user, $pass);
    $stmt = $dbh->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute(array($username, $password));

    if ($stmt->rowCount() == 1) { // User found
        $_SESSION['username'] = $username; // Set session variable
        header("Location: index.php"); // Redirect to homepage
        exit();
    } else { // User not found
        echo "Invalid username or password.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
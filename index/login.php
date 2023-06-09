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

<input type="submit" value="Login">
</form>

<?php
// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Sanitize the input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Check if the username and password are valid
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    // If the query returns a row, the username and password are valid
    if (mysqli_num_rows($result) == 1) {
        // Set the session variable for the user's id
        $_SESSION['user_id'] = mysqli_fetch_assoc($result)['id'];
        // Redirect the user to the home page
        header('Location: home.php');
    } else {
        echo "ërror";
        // The username and password are not valid, so add an error to the errors array
        $errors[] = 'Invalid username or password';
    }
}
?>

<?php

require 'config.php';
require 'database.php';
{
    '$errors';
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/login.js"></script>
</head>
<body>
<form action="register.php" method="post">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
    <input type="submit" value="Register">
</form>
</body>
</html>




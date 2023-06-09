
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



<?php
// Check if the form has been submitted
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    // Sanitize the input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    // Check if the passwords match
    if ($password !== $confirm_password) {
        echo "The passwords do not match.";
        return;
    }
    // Check if the username already exists
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "The username already exists.";
        return;
    }
    // Insert the new user into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    mysqli_query($conn, $sql);
    // Redirect the user to the login page
    header('Location: login.php');
}
// Display the register form
include 'register.html';

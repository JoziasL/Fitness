<?php
/* require 'db_conn.php';
if (!empty($_SESSION["id"])) {
    header("Location: fit-create-user.php");
}
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
//    var_dump($password);
    $query = $conn->prepare("SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($password);
    if ($password == $result['password']) {
            $_SESSION["login"] = true;
        $_SESSION["id"] = $result["id"];

       //header("Location: fit-create-user.php");
    } else {
        echo "<script> alert('Wrong Password'); </script>";
    }
}; */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Controleer of de vereiste formuliervelden zijn ingestuurd
    if (isset($_POST["username"]) && isset($_POST["email"])) {
        $username = $_POST["username"];
        $email = $_POST["email"];

        // Voer de inloglogica uit
        // ...

        var_dump($username);
    } else {
        echo "Niet alle vereiste velden zijn ingevuld.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div>
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="email">E-mailadres:</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <input type="submit" value="Inloggen">
    </div>
</form>
</body>
</html>
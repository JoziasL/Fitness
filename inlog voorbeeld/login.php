<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Deze code controleert of het HTTP-verzoekstype "POST" is. deze code betekent dat de code wordt geactiveerd wanneer het inlogformulier wordt ingediend.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Controleert of de vereiste formuliervelden zijn ingestuurd.
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($password === "$password") {
            $_SESSION["username"] = $username;

            // Doorsturen naar de thuispagina
            header("Location: ../inlog%20website/workoutpage.php");
            exit();
        } else {
            $loginError = "Ongeldige gebruikersnaam of wachtwoord.";
        }
    }
    else {
        $loginError = "Niet alle vereiste velden zijn ingevuld.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
<h1>Login</h1>
<?php if (isset($loginError)) { ?>
    <p><?php echo $loginError; ?></p>
<?php } ?>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <div>
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password" required>
    </div>
    <div>
        <input type="submit" value="Inloggen">
    </div>
</form>
</body>
</html>

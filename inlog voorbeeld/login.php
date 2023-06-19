<?php
session_start();

// Controleer of de gebruiker al is ingelogd
if (isset($_SESSION["username"])) {
    // Gebruiker is al ingelogd, doorsturen naar de thuispagina
    header("Location: ../project%20website/homepage.php");
    exit();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Controleer of de vereiste formuliervelden zijn ingestuurd
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Voer hier je inloglogica uit
        // ...

        // Simpele controle: als het wachtwoord "1234" is, is de inlogpoging succesvol
        if ($password === "1234") {
            // Sla de gebruikersnaam op in de sessie om de ingelogde status te behouden
            $_SESSION["username"] = $username;

            // Doorsturen naar de thuispagina
            header("Location: ../project%20website/homepage.php");
            exit();
        } else {
            $loginError = "Ongeldige gebruikersnaam of wachtwoord.";
        }
    } else {
        $loginError = "Niet alle vereiste velden zijn ingevuld.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

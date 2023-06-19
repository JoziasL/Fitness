
<?php
require 'db_conn.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $query = $conn -> prepare("SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    $query -> execute();
    $result = $query -> fetchAll(PDO::FETCH_ASSOC);

    if(count($result) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO users VALUES(null,'$name','$username','$email','$password')";
            $result = $conn->query($query);
            if(!$result) {
                echo
                "<script> alert('Registration Successful'); </script>";
            }
        }
        else{
            echo
            "<script> alert('Password Does Not Match'); </script>";
        }
    }
}

    // Controleer of het formulier is ingediend
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verwerk het formulier en sla de gegevens op in de database
        // ...

        // Geef de homepage weer na succesvolle verwerking
        header("Location: ../project%20website/homepage.php");
        exit; // Belangrijk: zorg ervoor dat je de uitvoer stopt na het weergeven van de homepage
    }


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
</head>
<body>
<h2>Registration</h2>
<form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" autocomplete="off">
    <label for="name">Name : </label>
    <input type="text" name="name" id = "name" required value=""> <br>
    <label for="username">Username : </label>
    <input type="text" name="username" id = "username" required value=""> <br>
    <label for="email">Email : </label>
    <input type="email" name="email" id = "email" required value=""> <br>
    <label for="password">Password : </label>
    <input type="password" name="password" id = "password" required value=""> <br>
    <label for="confirmpassword">Confirm Password : </label>
    <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
    <button type="submit" name="submit" value="send">Register</button>
</form>
<br>
<a href="login.php">Login</a>
</body>
</html>
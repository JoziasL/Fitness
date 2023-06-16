<?php

require 'db_conn.php';
if (!empty($_SESSION["id"])) {
    header("Location: fit-create-user.php");
}
if (isset($_POST["submit"])) {
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
//    var_dump($password);
    $query = $conn->prepare("SELECT * FROM users WHERE username = '$usernameemail' OR email = '$usernameemail'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($password);
    if ($password == $result['password']) {
        echo "neeeeee";
        $_SESSION["login"] = true;
        $_SESSION["id"] = $result["id"];

       //header("Location: fit-create-user.php");
    } else {
        echo "<script> alert('Wrong Password'); </script>";
    }
};
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>
<h2>Login</h2>
<form class="" action="" method="post" autocomplete="off">
    <label for="usernameemail">Username or Email : </label>
    <input type="text" name="usernameemail" id="usernameemail" required value="" autofocus> <br>
    <label for="password">Password : </label>
    <input type="password" name="password" id="password" required value=""> <br>
    <button type="submit" name="submit">Login</button>
</form>
<br>
<a href="registration.php">Registration</a>
</body>
</html>
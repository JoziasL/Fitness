<?php
session_start();

include("Database_connect.php");
include("functie.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $gebruiker_naam = $_POST['gebruiker_naam'];
    $wachtwoord = $_POST['wachtwoord'];

    if(!empty($gebruiker_naam) && !empty($wachtwoord) && !is_numeric($gebruiker_naam))
    {

        //save to database
        $gebruiker_id = random_num(20);
        $query = "insert into users (gebruiker_id,gebruiker_naam,wachtwoord) values ('$gebruiker_id','$gebruiker_naam','$wachtwoord')";

        mysqli_query($con, $query);

        header("Location: HomePage_login.php");
        die;
    }else
    {
        echo "Please enter some valid information!";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>
<body>

<style type="text/css">

    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{

        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }

</style>

<div id="box">

    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Signup"><br><br>

        <a href="HomePage_login.php">Click to Login</a><br><br>
    </form>
</div>
</body>
</html>
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

        //read from database
        $query = "select * from users where gebruiker_naam = '$gebruiker_naam' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);

                if($user_data['wachtwoord'] === $wachtwoord)
                {

                    $_SESSION['gebruiker_id'] = $user_data['gebruiker_id'];
                    header("Location: HomePage_login.php");
                    die;
                }
            }
        }

        echo "wrong username or password!";
    }else
    {
        echo "wrong username or password!";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        <div style="font-size: 20px;margin: 10px;color: white;">Login</div>

        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Login"><br><br>

        <a href="signup.php">Click to Signup</a><br><br>
    </form>
</div>
</body>
</html>

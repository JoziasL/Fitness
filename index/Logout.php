<?php

session_start();

if(isset($_SESSION['gebruiker_id']))
{
    unset($_SESSION['gebruiker_id']);

}

header("Location: HomePage_login.php");
die;
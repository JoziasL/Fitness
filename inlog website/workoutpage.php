
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style-inlog.css">
</head>
<body>
<?php
include_once 'header.php';
?>
<h1>Workout Categories</h1>
<h1>
<?php
session_start();

// Controleren of de gebruiker is ingelogd
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Welcome, $username!";
} else {
    echo "Welcome!";
}
?>
</h1>
<div class="container">
    <div class="column">
        <h2>Beginner Workout</h2>
        <div class="image-container">
            <img src="../images/fitness-girl-lifting-dumbbell-morning-260nw-401309230.webp" alt="Push Image" class="category-image">
        </div>
        <a href="push1.php">Push</a>
        <a href="pull1.php">Pull</a>
        <a href="legs1.php">Legs</a>
    </div>
    <div class="column">
        <h2>Intermediate Workout</h2>
        <div class="image-container">
            <img src="../images/photo-1574680096145-d05b474e2155.jpg" alt="Pull Image" class="category-image">
        </div>
        <a href="push2.php">Push</a>
        <a href="pull2.php">Pull</a>
        <a href="legs2.php">Legs</a>
    </div>
    <div class="column">
        <h2>Advanced Workout</h2>
        <div class="image-container">
            <img src="../images/photo-1605296867304-46d5465a13f1.jpg" alt="Legs Image" class="category-image">
        </div>
        <a href="push3.php">Push</a>
        <a href="pull3.php">Pull</a>
        <a href="legs3.php">Legs</a>
    </div>
    <div class="column">
        <h2>Calisthenic Workout</h2>
        <div class="image-container">
            <img src="../images/Barbend.com-Featured-Image-Calisthenics-Pull-ups.jpg" alt="New Image" class="category-image">
        </div>
        <a href="push4.php">Push</a>
        <a href="pull4.php">Pull</a>
        <a href="legs4.php">Legs</a>
    </div>
</div>

</body>
</html>

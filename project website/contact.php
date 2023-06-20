<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitNess - Home | By Code Info</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Iocns cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
</head>
<body>
<header class="header">
    <a href="#" class="logo">
        <i class="fas fa-dumbbell"></i>FitNess
    </a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <a href="#">|</a>
        <a href="#">Login</a>
        <a href="#" class="btn">Sign Up</a>
    </nav>
</header>
<!-- main content -->
<main>
    <div class="container">
        <h1>Contact Us</h1>

        <form action="email.php" method="post">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Send">
        </form>

    </div>
</main>
<section class="home">
</section>
</body>
</html>



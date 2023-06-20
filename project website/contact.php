<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FitNess - Home | By Code Info</title>
    <link rel="stylesheet" href="style.css">
</head>
<header class="header">
    <a href="index.php" class="logo">
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            padding: 20px;
            margin: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #9a1818;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</header>
<body>
<h1>Contact</h1>

<form action="contact_process.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>
</body>

</html>
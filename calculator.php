<!DOCTYPE html>
<html>
<head>
    <title>Macro Calculator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Macro Calculator</h1>
</header>
<main>
    <form>
        <label for="weight">Weight (in kg):</label>
        <input type="number" id="weight" name="weight" required><br>

        <label for="height">Height (in cm):</label>
        <input type="number" id="height" name="height" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

        <label for="activity-level">Activity Level:</label>
        <select id="activity-level" name="activity-level" required>
            <option value="sedentary">Sedentary (little or no exercise)</option>
            <option value="lightly-active">Lightly Active (light exercise or sports 1-3 days a week)</option>
            <option value="moderately-active">Moderately Active (moderate exercise or sports 3-5 days a week)</option>
            <option value="very-active">Very Active (hard exercise or sports 6-7 days a week)</option>
            <button type="submit">Calculate</button>
    </form>


    <div>
        <h2>Results:</h2>
        <p>Protein: <span id="protein"></span> grams</p>
        <p>Carbohydrates: <span id="carbohydrates"></span> grams</p>
        <p>Fat: <span id="fat"></span> grams</p>
    </div>
</main>
</body>
</html>

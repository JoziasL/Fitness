function calculateMacros(event) {
    event.preventDefault();

    // Get user input values
    const weight = document.getElementById("weight").value;
    const height = document.getElementById("height").value;
    const age = document.getElementById("age").value;
    const gender = document.getElementById("gender").value;
    const activityLevel = document.getElementById("activity-level").value;

    // Calculate BMR
    let bmr;
    if (gender === "male") {
        bmr = 10 * weight + 6.25 * height - 5 * age + 5;
    } else {
        bmr = 10 * weight + 6.25 * height - 5 * age - 161;
    }

    // Calculate TDEE
    let tdee;
    switch (activityLevel) {
        case "sedentary":
            tdee = bmr * 1.2;
            break;
        case "lightly-active":
            tdee = bmr * 1.375;
            break;
        case "moderately-active":
            tdee = bmr * 1.55;
            break;
        case "very-active":
            tdee = bmr * 1.725;
            break;
    }

    // Calculate macros
    const protein = Math.round((0.4 * tdee) / 4);
    const carbs = Math.round((0.4 * tdee) / 4);
    const fat = Math.round((0.2 * tdee) / 9);

    // Display results
    document.getElementById("protein").textContent = protein;
    document.getElementById("carbs").textContent = carbs;
    document.getElementById("fat").textContent = fat;
}
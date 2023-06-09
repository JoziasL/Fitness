function validatePasswords() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirm_password").value;
    if (password !== confirmPassword) {
        alert("The passwords do not match.");
        return false;
    }
    return true;
}
document.getElementById("register").addEventListener("click", validatePasswords);

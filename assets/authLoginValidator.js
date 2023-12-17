function validateForm() {
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("errorMessage").innerHTML = "";

    var username = document.getElementById("emailInput").value;
    var password = document.getElementById("passwordInput").value;

    var isValid = true;

    if (username === "") {
        document.getElementById("emailError").innerHTML = "Email is required";
        isValid = false;
    }

    if (password === "") {
        document.getElementById("passwordError").innerHTML = "Password is required";
        isValid = false;
    }


    return isValid;
}
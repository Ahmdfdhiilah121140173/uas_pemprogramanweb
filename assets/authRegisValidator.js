function validateForm() {

    var name = document.getElementById('nameInput').value;
    var email = document.getElementById('emailInput').value;
    var password = document.getElementById('passwordInput').value;

    document.getElementById('nameInput').classList.remove('error-border', 'success-border');
    document.getElementById('emailInput').classList.remove('error-border', 'success-border');
    document.getElementById('passwordInput').classList.remove('error-border', 'success-border');
    document.getElementById('nameError').innerText = '';
    document.getElementById('emailError').innerText = '';
    document.getElementById('passwordError').innerText = '';

    if (!name) {
        document.getElementById('nameInput').classList.add('error-border');
        document.getElementById('nameError').innerText = 'Name is required';
        return false;
    } else {
        document.getElementById('nameInput').classList.add('success-border');
    }

    if (!email) {
        document.getElementById('emailInput').classList.add('error-border');
        document.getElementById('emailError').innerText = 'Email is required';
        return false;
    } else {
        document.getElementById('emailInput').classList.add('success-border');
    }

    if (!password) {
        document.getElementById('passwordInput').classList.add('error-border');
        document.getElementById('passwordError').innerText = 'Password is required';
        return false;
    } else {
        document.getElementById('passwordInput').classList.add('success-border');
    }

    return true;
}
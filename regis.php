<?php
session_start();

include "configuration.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);
    $userObj = new User();
    $userObj->createUser($name, $email, $password);

    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <h1 class="title">SIGN UP</h1>
                <form class="login" onsubmit="return validateForm()" method="post">
                    <div class="login__field">
                        <label for="name">Name</label><br>
                        <input type="text" id="nameInput" class="login__input" name="name" placeholder="Name">
                        <div id="nameError" class="error"></div>
                    </div>
                    <div class="login__field">
                        <label for="email">Email</label><br>
                        <input type="email" id="emailInput" class="login__input" name="email" placeholder="Email">
                        <div id="emailError" class="error"></div>
                    </div>
                    <div class="login__field">
                        <label for="password">Password</label><br>
                        <input type="password" id="passwordInput" class="login__input" name="password" placeholder="Password">
                        <div id="passwordError" class="error"></div>
                    </div>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Submit</span>
                    </button>
                </form>
                <p style="text-align: center; margin-top: 15px;">Sudah punya akun? <a href="login.php">Login di sini</a></p>
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    <?php include_once "components/footer.php";?>
    <script src="./assets/authRegisValidator.js">
    </script>
</body>

</html>

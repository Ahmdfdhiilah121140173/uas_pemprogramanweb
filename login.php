<?php
session_start();

include "configuration.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $userObj = new User();
    $userData = $userObj->getUser($email, $password); 
    if (!empty($userData)) {
        $_SESSION['email'] = $userData['email'];
        $_SESSION['password'] = $userData['password'];
        setcookie("message", "delete", time() - 1);
        header("location: index.php");
    } else {
        setcookie("message", "Maaf, Email atau Password salah", time() + 3600);
        header("location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <h1 class="title">SIGN IN</h1>
                <form class="login" name="loginForm" action="login.php" method="post" onsubmit="return validateForm()">
                    <div class="login__field">
                        <label for="email">Email</label><br>
                        <input type="text" id="emailInput" name="email" class="login__input" placeholder="Email">
                        <div id="emailError" class="error"></div>
                    </div>
                    <div class="login__field">
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id="passwordInput" class="login__input"
                            placeholder="Password">
                        <div id="passwordError" class="error"></div>
                    </div>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Submit</span>
                    </button>
                </form>
                <p style="z-index:999;text-align: center; margin-top: 15px;">Belum punya akun? <a
                        href="regis.php">Daftar di sini</a></p>
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
    <script src="./assets/authLoginValidator.js"></script>
</body>

</html>
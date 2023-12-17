<?php
session_start();

include "../configuration.php";
if (!isset($_SESSION['email'])) {
    header("location: ../login.php");
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $cursedTechnique = $_POST['cursed_technique'];
    $domainExpansion = isset($_POST['domain_expansion']) ? 1 : 0;
    $type = $_POST['type'];
    $age = $_POST['age'];

    $jujutsuObj = new Jujutsu();
    $result = $jujutsuObj->insertJujutsu($name, $cursedTechnique, $domainExpansion, $type, $age);

    if ($result === true) {
        header("location: ../index.php");
        exit();
    } else {
        echo $result;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Jujutsu Sorcerer</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <nav class="menu-fixed">
        <ul class="menu">
            <div class="logo">
                Ahmdfdhilah <span>UAS</span>
            </div>
            <div class="menu__list">
                <li class="menu__item">
                    <a href="../index.php" class="menu__link"><svg xmlns="http://www.w3.org/2000/svg" height="16"
                            width="18" fill="#ffffff" viewBox="0 0 576 512">
                            <path
                                d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                        </svg>Home</a>
                </li>
                <li class="menu__item">
                    <a href="create.php" class="menu__link">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"
                            fill="#ffffff">
                            <path
                                d="M362.7 19.3L314.3 67.7 444.3 197.7l48.4-48.4c25-25 25-65.5 0-90.5L453.3 19.3c-25-25-65.5-25-90.5 0zm-71 71L58.6 323.5c-10.4 10.4-18 23.3-22.2 37.4L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L421.7 220.3 291.7 90.3z" />
                        </svg>Form</a>
                </li>

                <li class="menu__item ">
                    <a href="../logout.php" class="menu__link"><svg xmlns="http://www.w3.org/2000/svg" height="16"
                            width="16" fill="#ffffff" viewBox="0 0 512 512">
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                        </svg></a>
                </li>
            </div>

        </ul>
    </nav>
    <div class="container">
        <div class="screen">
            <div class="screen__content">
                <h1 class="title">CREATE JUJUTSU SORCERER</h1>
                <form class="login" id="form" onsubmit="return validateForm()" name="createForm" action="create.php"
                    method="post">
                    <div class="login__field">
                        <label for="name">Name</label><br>
                        <input type="text" id="nameInput" name="name" class="login__input" placeholder="Name">
                        <div id="nameError" class="error"></div>
                    </div>
                    <div class="login__field">
                        <label for="cursed_technique">Cursed Technique</label><br>
                        <input type="text" name="cursed_technique" id="cursedTechniqueInput" class="login__input"
                            placeholder="Cursed Technique">
                        <div id="cursedTechniqueError" class="error"></div>
                    </div>
                    <div class="login__field">
                        <label for="domain_expansion">Domain Expansion</label><br>
                        <input type="checkbox" name="domain_expansion" id="domainExpansionInput" class="login__input">
                    </div>
                    <div class="login__field">
                        <label for="type">Type</label><br>
                        <select id="typeInput" name="type" class="login__input">
                            <option value="">Select Type</option>
                            <option value="human">Human</option>
                            <option value="cursed spirit">Cursed Spirit</option>
                        </select>
                        <div id="typeError" class="error"></div>
                    </div>
                    <div class="login__field">
                        <label for="age">Age</label><br>
                        <input type="text" name="age" id="ageInput" class="login__input" placeholder="Age">
                        <div id="ageError" class="error"></div>
                    </div>
                    <button class="button login__submit" type="submit">
                        <span class="button__text">Submit</span>
                    </button>
                </form>

            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    <?php include_once "../components/footer.php"; ?>
    <script>
        document.getElementById('form').addEventListener('submit', function () {
            localStorage.setItem('input_data', JSON.stringify({
                name: document.getElementById('name').value,
                cursed_technique: document.getElementById('cursed_technique').value,
                domain_expansion: document.getElementById('domain_expansion').checked,
                type: document.getElementById('type').value,
                age: document.getElementById('age').value
            }));
        });

        window.addEventListener('load', function () {
            const inputData = JSON.parse(localStorage.getItem('input_data'));
            if (inputData) {
                document.getElementById('name').value = inputData.name;
                document.getElementById('cursed_technique').value = inputData.cursed_technique;
                document.getElementById('domain_expansion').checked = inputData.domain_expansion;
                document.getElementById('type').value = inputData.type;
                document.getElementById('age').value = inputData.age;
            }
        });
    </script>
    <script>
        function validateForm() {
            var name = document.getElementById("nameInput");
            var cursedTechnique = document.getElementById("cursedTechniqueInput");
            var type = document.getElementById("typeInput");
            var age = document.getElementById("ageInput");

            var isValid = true;

            if (name.value.trim() === "") {
                isValid = false;
                name.classList.add("input-error");
            } else {
                name.classList.remove("input-error");
                name.classList.add("input-success");
            }

            if (cursedTechnique.value.trim() === "") {
                isValid = false;
                cursedTechnique.classList.add("input-error");
            } else {
                cursedTechnique.classList.remove("input-error");
                cursedTechnique.classList.add("input-success");
            }

            if (type.value === "") {
                isValid = false;
                type.classList.add("input-error");
            } else {
                type.classList.remove("input-error");
                type.classList.add("input-success");
            }

            if (age.value.trim() === "" || isNaN(age.value)) {
                isValid = false;
                age.classList.add("input-error");
            } else {
                age.classList.remove("input-error");
                age.classList.add("input-success");
            }

            return isValid;
        }
    </script>
</body>

</html>
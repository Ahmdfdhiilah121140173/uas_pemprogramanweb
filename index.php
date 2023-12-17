<?php
require_once 'configuration.php';

session_start();
if (!isset($_SESSION['email'])) {
	header("location: login.php");
}

$jujutsuInstance = new Jujutsu();
$jujutsuSorcerers = $jujutsuInstance->getJujutsuSorcerers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jujutsu Sorcerers</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php include_once './components/navbar.php' ?>
    <div class="section">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Cursed Technique</th>
                    <th>Domain Expansion</th>
                    <th>Type</th>
                    <th>Age</th>
                    <th class="action-column">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jujutsuSorcerers as $sorcerer): ?>
                    <tr>
                        <td>
                            <?= $sorcerer['id']; ?>
                        </td>
                        <td>
                            <?= $sorcerer['name']; ?>
                        </td>
                        <td>
                            <?= $sorcerer['cursed_technique']; ?>
                        </td>
                        <td>
                            <?= $sorcerer['domain_expansion'] ? 'Yes' : 'No'; ?>
                        </td>
                        <td>
                            <?= $sorcerer['type']; ?>
                        </td>
                        <td>
                            <?= $sorcerer['age']; ?>
                        </td>
                       
                        <td class="action-column">
                            <a href="./view/update.php?id=<?= $sorcerer['id']; ?>" class="action-button edit-button">Edit</a>
                            <a href="./view/delete.php?id=<?= $sorcerer['id']; ?>" class="action-button delete-button">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div id="cookie-notice">
		<p>Saya memanfaatkan cookie untuk meningkatkan kenyamanan Anda saat menggunakan situs web ini. Dengan melanjutkan, Anda menyetujui kebijakan penggunaan cookie yang telah saya tetapkan.</p>
		<button onclick="acceptCookies()">Setuju</button>
	</div>
    <?php include_once "components/footer.php"; ?>
	<script>
		function acceptCookies() {
			setCookie("cookie", "true", 30);
			document.getElementById("cookie-notice").style.display = "none";
		}

		function setCookie(name, value, days) {
			var expires = "";
			if (days) {
				var date = new Date();
				date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
				expires = "; expires=" + date.toUTCString();
			}
			document.cookie = name + "=" + (value || "") + expires + "; path=/";
		}

		function getCookie(name) {
			var nameEQ = name + "=";
			var ca = document.cookie.split(';');
			for (var i = 0; i < ca.length; i++) {
				var c = ca[i];
				while (c.charAt(0) == ' ') c = c.substring(1, c.length);
				if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
			}
			return null;
		}

		var cookieAccepted = getCookie("cookie");
		if (cookieAccepted === "true") {
			document.getElementById("cookie-notice").style.display = "none";
		}
	</script>
</body>

</html>
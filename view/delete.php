<?php
session_start();

include "../configuration.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $jujutsuObj = new Jujutsu();
    $result = $jujutsuObj->deleteJujutsu($id);

    if ($result === true) {
        header("location: ../index.php");
        exit();
    } else {
        echo $result;
    }
}
?>

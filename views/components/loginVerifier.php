<?php
    session_start();

    if (empty($_SESSION["logado"]) || $_SESSION["logado"] == false) {
        header("location: login.view.php");
    }
?>
<?php 
    require("../models/login.model.php");
    
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($usuario == "admin" && $senha == "1234") {
            $_SESSION["logado"] = true;
            $_SESSION["usuario"] = "Administrador";
            header("Location: inicio.view.php");
        } else {
            $erro = true;
        }

        if ($usuario == "") {
            $erro_user = true;
            $erro = false;
        }

        if ($senha == "") {
            $erro_pass = true;
            $erro = false;

        }
    }

    if (!empty($_SESSION["logado"]) && $_SESSION["logado"]) {
        header("Location: inicio.view.php");
    }
?>
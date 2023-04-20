<?php 
    require("../models/categoria.model.php");

    //excluir
    if (isset($_GET["delete"]) ) {
        $id = intval($_GET["delete"]);
        if(isset($_SESSION["categorias"][$id])) {

            unset($_SESSION["categorias"][$id]);

            header("Location: categoria_list.view.php?sucesso=Categoria " . $_SESSION["categorias"][$id]["id"] . " excluída com sucesso");

            exit();
        } else {
            $erro = "O índice especificado não existe.";
        }
    }

    //editar
    if (isset($_GET["id"])) {
        $id = intval($_GET["id"]);
        if($id >= 1) {
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                if(!empty($name)) {
                    $_SESSION["categorias"][$id]["name"] = $_POST["name"];
                    $_SESSION["categorias"][$id]["descricao"] = $_POST["descricao"];


                    header("Location: categoria_list.view.php?sucesso=Categoria " . $_SESSION["categorias"][$id]["id"] . " editada com sucesso");

                } else {
                    $erro = "Por favor, preencha todos os campos.";
                }
            }

        } else {
            $erro = "O índice não é válido";
        }
    }

    //adicionar
    if($_SERVER["REQUEST_METHOD"] == "POST" && empty($_GET["id"])) {

        if(!empty($name) && !empty($descricao)) {

            $_SESSION["indiceCategoria"]++;
            $categorias = array(
                "id" => $_SESSION["indiceCategoria"],
                "name" => $name,
                "descricao" => $descricao,
            );

            $_SESSION["categorias"][$_SESSION["indiceCategoria"]] = $categorias;
            header("Location: categoria_list.view.php?sucesso=Categoria criada com sucesso");
        } else {
           $erro = "Categoria não preenchida corretamente!";
        }
         
    }

?>
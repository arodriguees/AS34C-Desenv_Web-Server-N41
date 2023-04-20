<?php 
    require("../models/lancamento.model.php");

    //excluir
    if (isset($_GET["delete"]) ) {
        $id = intval($_GET["delete"]);
        if(isset($_SESSION["lancamentos"][$id])) {

            unset($_SESSION["lancamentos"][$id]);

            header("Location: lancamento_list.view.php?sucesso=Lançamento " . $_SESSION["lancamentos"][$id]["id"] . " excluído com sucesso");

            exit();
        } else {
            $erro = "O índice especificado não existe.";
        }
    }

    //editar
    if (isset($_GET["id"])) {
        $id = intval($_GET["id"]);
        if($id >= 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
            if(!empty($categoria) && !empty($date) && !empty($metodo) && !empty($valor) && !empty($descricao) && !empty($tipo) && $categoria != "cat_invalida") {
                $_SESSION["lancamentos"][$id]["categoria"] = $_POST["categoria"];
                $_SESSION["lancamentos"][$id]["date"] = $_POST["date"];
                $_SESSION["lancamentos"][$id]["metodo"] = $_POST["metodo"];
                $_SESSION["lancamentos"][$id]["descricao"] = $_POST["descricao"];
                $_SESSION["lancamentos"][$id]["tipo"] = $_POST["tipo"];


                header("Location: lancamento_list.view.php?sucesso=Lançamento " . $_SESSION["lancamentos"][$id]["id"] . " editado com sucesso");

            } else {
                $erro = "Por favor, preencha todos os campos.";
            }

        } else {
            $erro = "O índice não é válido";
        }
    }

    //adicionar
    if($_SERVER["REQUEST_METHOD"] == "POST" && empty($_GET["id"])) {

        if(!empty($categoria) && !empty($date) && !empty($metodo) && !empty($valor) && !empty($descricao) && !empty($tipo) && $categoria != "cat_invalida") {

            $_SESSION["indiceLancamento"]++;
            $lancamentos = array(
                "id" => $_SESSION["indiceLancamento"],
                "categoria" => $categoria,
                "date" => $date,
                "metodo" => $metodo,
                "valor" => $valor,
                "descricao" => $descricao,
                "tipo" => $tipo
            );

            $_SESSION["lancamentos"][$_SESSION["indiceLancamento"]] = $lancamentos;
            header("Location: lancamento_list.view.php?sucesso=Lançamento criado com sucesso");
        } else {
           $erro = "Lançamento não preenchido corretamente!";
        }
         
    }

?>
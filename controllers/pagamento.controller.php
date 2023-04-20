<?php 
    require("../models/pagamento.model.php");

    //excluir
    if (isset($_GET["delete"]) ) {
        $id = intval($_GET["delete"]);
        if(isset($_SESSION["pagamentos"][$id])) {

            unset($_SESSION["pagamentos"][$id]);

            header("Location: pagamento_list.view.php?sucesso=Pagamento " . $_SESSION["pagamentos"][$id]["id"] . " excluído com sucesso");

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
                    $_SESSION["pagamentos"][$id]["name"] = $_POST["name"];


                    header("Location: pagamento_list.view.php?sucesso=Pagamento " . $_SESSION["pagamentos"][$id]["id"] . " editado com sucesso");

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

        if(!empty($name)) {

            $_SESSION["indicePagamento"]++;
            $pagamentos = array(
                "id" => $_SESSION["indicePagamento"],
                "name" => $name,
            );

            $_SESSION["pagamentos"][$_SESSION["indicePagamento"]] = $pagamentos;
            header("Location: pagamento_list.view.php?sucesso=Pagamento criado com sucesso");
        } else {
           $erro = "Pagamento não preenchido corretamente!";
        }
         
    }

?>
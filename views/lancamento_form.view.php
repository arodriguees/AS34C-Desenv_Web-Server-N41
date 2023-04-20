<?php
    require("components/loginVerifier.php");
    require("../controllers/lancamento.controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lançamento form</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="../assets/style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/sideBar.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>
    <?php
    require("components/sidebar.php");
    ?>
    <section class="home-section">
        <div class="container pt-5">
            <h2>Lançamentos</h2>
            <form action="../views/lancamento_form.view.php<?=isset($id)? "?id=" .$id : ""?>" method="post">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria de transação</label>
                            <select class="form-select" name="categoria" id="categoria" <?=empty($_SESSION["categorias"]) ? "disabled" : "";?>>
                                <option value="cat_invalida"></option>
                                <?php  if (!empty($_SESSION["categorias"])) :?>

                                <?php foreach ($_SESSION["categorias"] as $categoria ): ?>
                                <option
                                    <?=isset($_SESSION["lancamentos"][$id]["categoria"]) && $_SESSION["lancamentos"][$id]["categoria"] == $categoria["name"] ? ' selected="selected"' : "";?>>
                                    <?= isset($categoria["name"]) ? $categoria["name"] : "";?>
                                </option>
                                <?php endforeach; ?>
                                <?php else : ?>
                                    
                                    <option selected="selected" value="cat_invalida">Cadastre ao menos uma categoria!</option>
                                
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="date" class="form-label">Data da transação</label>
                            <input class="form-control" id="date" type="date" name="date"
                                value="<?=isset($_SESSION["lancamentos"][$id]["date"]) ? $_SESSION["lancamentos"][$id]["date"] : "";?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="select" class="form-label">Método de pagamento</label>
                            <select class="form-select" name="metodo" id="select"
                            <?=empty($_SESSION["pagamentos"]) ? "disabled" : "";?>
                            >
                                <option></option>
                                <?php  if (!empty($_SESSION["pagamentos"])) :?>
                                <?php foreach ($_SESSION["pagamentos"] as $metodo ): ?>
                                <option
                                    <?=isset($_SESSION["lancamentos"][$id]["metodo"]) && $_SESSION["lancamentos"][$id]["metodo"] == $metodo["name"] ? ' selected="selected"' : "";?>>
                                    <?= isset($metodo["name"]) ? $metodo["name"] : "";?>
                                </option>
                                <?php endforeach; ?>
                                <?php else : ?>
                                    
                                    <option selected="selected" value="cat_invalida">Cadastre um método de pagamento!</option>
                                
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="select" class="form-label">Valor</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="R$" name="valor"
                                    value="<?=isset($_SESSION["lancamentos"][$id]["valor"]) ? $_SESSION["lancamentos"][$id]["valor"] : "";?>">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descrição</label>
                    <textarea class="form-control" name="descricao" id="description"
                        rows="3"><?=isset($_SESSION["lancamentos"][$id]["descricao"]) ? $_SESSION["lancamentos"][$id]["descricao"] : "";?></textarea>
                </div>

                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Tipo de transação</legend>
                    <div class="col-sm-10">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo1" value="Rendimento"
                                <?=isset($_SESSION["lancamentos"][$id]["tipo"]) &&$_SESSION["lancamentos"][$id]["tipo"] == "Rendimento" ? "checked" : "";?>>
                            <label class="form-check-label" for="tipo1">Rendimento (Entrada)</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="radio" name="tipo" id="tipo2" value="Despesa"
                                <?=isset($_SESSION["lancamentos"][$id]["tipo"]) &&$_SESSION["lancamentos"][$id]["tipo"] == "Despesa" ? "checked" : "";?>>
                            <label class="form-check-label" for="tipo2">Despesa (Saída)</label>
                        </div>
                    </div>
                </fieldset>
                <?php if ($erro) : ?>
                <div class="alert alert-danger">
                    <?=$erro ?>
                </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>

    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });
    </script>
</body>

</html>
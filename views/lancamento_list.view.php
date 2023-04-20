<?php
    require("components/loginVerifier.php");
    require("../controllers/lancamento.controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lançamento Listagem</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="../assets/style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/consulta.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../assets/style/style.css" />

</head>

<body>
    <?php
    require("components/sidebar.php");
    ?>

    <?php if (isset($_GET["sucesso"])) : ?>
    <div class="alert alert-success"
        style="margin: 0 auto;position: absolute;left: 0;right: 0;top: 50px;/* bottom: 0; */z-index: 9999;width: fit-content;">
        <?=$_GET["sucesso"] ?>
    </div>
    <?php endif; ?>
    <section class="home-section">
        <div class="container">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><b style="color:#fff">Listagem de Lançamentos</b></h2>

                            </div>
                            <div class="col-sm-6">
                                <a href="lancamento_form.view.php" class="btn btn-success"><i
                                        class="material-icons">&#xE147;</i> <span>ADICIONAR </span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <?php  if (!empty($_SESSION["lancamentos"])) :?>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Categoria</th>
                                <th>Data</th>
                                <th>Método de pagamento</th>
                                <th>Valor</th>
                                <th>Descrição</th>
                                <th>Tipo</th>
                                <th>Ações</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php  foreach ($_SESSION["lancamentos"] as $key => $lanc) :?>
                            <tr>
                                <td><?= $lanc["id"] ?></td>
                                <td><?= $lanc["categoria"] ?></td>
                                <td><?php $date = new DateTime($lanc["date"]);?><?= date_format($date, "d/m/o")?></td>
                                <td><?= $lanc["metodo"] ?></td>
                                <td><?= $lanc["valor"] ?></td>
                                <td><?= $lanc["descricao"] ?></td>
                                <td><?= $lanc["tipo"] ?></td>
                                <td>
                                    <a href="lancamento_form.view.php?id=<?= $lanc["id"] ?>" class="edit"><i
                                            class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                    <a href="lancamento_form.view.php?delete=<?= $lanc["id"] ?>" class="delete"><i
                                            class="material-icons" data-toggle="tooltip"
                                            title="Deletar">&#xE872;</i></a>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php else : ?>
        <div class="text-center mt-4">
            <h4> Nenhum lançamento cadastrado</h4>
        </div>
        <?php endif; ?>

    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });
    </script>

    <script>
    setTimeout(function() {
        var msg = document.getElementsByClassName("alert-success");
        while (msg.length > 0) {
            msg[0].parentNode.removeChild(msg[0]);
        }
    }, 5000);
    </script>
</body>

</html>
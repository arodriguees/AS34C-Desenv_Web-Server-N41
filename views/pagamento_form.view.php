<?php
    require("components/loginVerifier.php");
    require("../controllers/pagamento.controller.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Método de pagamento form</title>

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
            <h2>Método de pagamentos</h2>
            <form action="../views/pagamento_form.view.php<?=isset($id)? "?id=" .$id : ""?>" method="post">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="select" class="form-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control"  name="name" value="<?=isset($_SESSION["pagamentos"][$id]["name"]) ? $_SESSION["pagamentos"][$id]["name"] : "";?>">
                            </div>
                        </div>
                    </div>
                </div>
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
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });
    </script>
</body>

</html>
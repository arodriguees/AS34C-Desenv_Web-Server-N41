<?php
    require("components/loginVerifier.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Início</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="../assets/style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style/style.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>

    <?php
    require("components/sidebar.php");
    ?>
    <section class="home-section">
        <div class="container">
            <div class="row">
                <!-- <div class="col-12">
                    <img src="../assets/images/logo.png" alt="logo">
                </div> -->
                <div class="col-12 my-4">
                    <h2>Bem vindo, <b class="text-decoration-underline"><?=$_SESSION["usuario"]?>!</b></h2>
                </div>
            </div>
            <div class="card">

                <h4 class="mb-4">Navegação rápida</h4>
                <div class="row">
                    
                    <div class="col-4">
                        <a href="pagamento_list.view.php" class="h-100">
                        <div class="dash_card text-center center">
                                <i class="bx bx-dollar-circle"></i>
                                <span class="links_name">Métodos de pagamento</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="categoria_list.view.php" class="h-100">
                        <div class="dash_card text-center center">
                                <i class="bx bxs-coin-stack"></i>
                                <span class="links_name">Categorias</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="lancamento_list.view.php" class="h-100">
                        <div class="dash_card text-center center">
                                <i class="bx bxs-coin-stack"></i>
                                <span class="links_name">Lançamentos</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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
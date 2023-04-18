<?php
    session_start();

    if (empty($_SESSION["logado"]) || $_SESSION["logado"] == false) {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font Awesome Cdn -->
    <script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link href="./assets/style/main.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/sideBar.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />

</head>

<body>
    <!-- <header class="super-container">
        <div class="header trans_300">

            main Navigation 
        </div>
    </header> -->

    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">FluX</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list" style="padding-left:0px;">
            <li>
                <a href="#">
                    <i class="bx bx-line-chart"></i>
                    <span class="links_name">Plano de Contas</span>
                </a>
                <span class="tooltip">Plano de Contas</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-coin-stack"></i>
                    <span class="links_name">Lançamentos</span>
                </a>
                <span class="tooltip">Lançamentos</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-coin-stack"></i>
                    <span class="links_name">Resumo: Lançamentos</span>
                </a>
                <span class="tooltip">Resumo: Lançamentos</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-columns"></i>
                    <span class="links_name">Consolidados</span>
                </a>
                <span class="tooltip">Resultados Consolidados</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-bar-chart-alt-2"></i>
                    <span class="links_name">Gráficos</span>
                </a>
                <span class="tooltip">Gráficos</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-report"></i>
                    <span class="links_name">Relatórios</span>
                </a>
                <span class="tooltip">Relatórios</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bx-log-in"></i>
                    <span class="links_name">Entrar</span>
                </a>
                <span class="tooltip">Entrar</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <div class="name_job">
                        <div class="name">ADS</div>
                        <div class="job">Desenv. Web Servidor</div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <!-- Form -->
        <div class="container pt-5">
            <h2>Record Control</h2>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Transaction Type</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="example-date" class="form-label">Transaction Date</label>
                        <input class="form-control" id="example-date" type="date" name="date">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Payment Method</label>
                        <select class="form-select" id="example-select">
                            <option></option>
                            <option>1 - Cartão de Crédito</option>
                            <option>2 - Dinheiro</option>
                            <option>3 - Boleto</option>
                            <option>4 - Depósito</option>
                            <option>5 - Convênio</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="example-select" class="form-label">Value</label>
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Type of Control</legend>
                <div class="col-sm-10">
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                            checked>
                        <label class="form-check-label" for="gridRadios1">Revenue (In)</label>
                    </div>
                    <div class="form-check-inline">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">Expense (Out)</label>
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-primary">Send</button>
        </div>
        <!-- End Form -->

    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
    let closeBtn = document.querySelector("#btn");
    let searchBtn = document.querySelector(".bx-search");

    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
        menuBtnChange(); //Abrir o sideMenu
    });
    </script>
</body>

</html>
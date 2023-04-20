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
    <link rel="stylesheet" href="../assets/style/sideBar.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

</head>

<body>
    <?php
    require("components/sidebar.php");
    ?>
    <section class="home-section">
        <!-- Form -->
        <div class="container pt-5">
            <h2>Lançamentos</h2>

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
    closeBtn.addEventListener("click", () => {
        sidebar.classList.toggle("open");
    });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FluX | Login</title>
    <!-- <link rel="stylesheet" href="../assets/style/style.css"> -->
    <link rel="stylesheet" href="../assets/style/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php require_once("../controllers/login.controller.php") ?>

    <div class="container p-5">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img class="backImg" src="../assets/images/img-login.jpg" alt="">
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div class="login-form">
                    <div class="title">Login</div>
                    <form method="post" action="../views/login.view.php">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="user" placeholder="Insira seu nome">
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" id="passwordLogin" name="passwordLogin" placeholder="Insira sua senha">
                                <i class="fa-solid fa-eye eyes  icon" onclick="hideEye(this)"></i>
                                <i class="fa-solid fa-eye-slash eyes  d-none icon" onclick="hideEye(this)"></i>
                            </div>
                            <?php if ($erro_user) : ?>
                            <div class="alert alert-danger">
                                <?php
                                $usuario
                                ?>
                                Usuário vazio!
                            </div>
                            <?php endif; ?>

                            <?php if ($erro_pass) : ?>
                            <div class="alert alert-danger">
                                Senha vazia!
                            </div>
                            <?php endif; ?>

                            <?php if ($erro) : ?>
                            <div class="alert alert-danger">
                                Usuário ou senha inválidos!
                            </div>
                            <?php endif; ?>

                            <div class="button input-box">
                                <input type="submit">
                            </div>
                            <!-- <div class="text sign-up-text">Não possui uma conta? <label for="flip"><u>Registre-se
                                        agora!</u></label> -->
                        </div>
                </div>
                </form>
            </div>
            <!-- <div class="signup-form">
                <div class="title">Registrar</div>
                <form action="#">
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Insira seu nome">
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input id="password" type="password" placeholder="Insira sua senha">
                            <i class="fa-solid fa-eye eyes icon" onclick="hideEye(this)"></i>
                            <i class="fa-solid fa-eye-slash eyes d-none icon" onclick="hideEye(this)"></i>
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Criar">
                        </div>
                        <div class="text sign-up-text">Ja possui uma conta? <label for="flip"><u>Entre
                                    agora!</u></label></div>
                    </div>
                </form>
            </div> -->
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
    <script>
    var eyes = document.getElementsByClassName("eyes");
    var pass = document.getElementById("passwordLogin");

    function hideEye(element) {
        eyes[0].classList.toggle("d-none");
        eyes[1].classList.toggle("d-none");
        if (pass.type === "password") {
            pass.type = "text";
        } else {
            pass.type = "password";
        }
    }

    </script>

</body>

</html>
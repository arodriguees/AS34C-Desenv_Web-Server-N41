<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho web servidor</title>
    <link rel="stylesheet" href="./assets/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row text-center justify-content-center" style="height: -webkit-fill-available">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <div class="form_wrapper">
                    <!-- <img src="money-bag.png" class="w-50 d-block m-auto mb-4" alt="" srcset=""> -->
                    <h1 class="text-center mb-4 ">Cadastro</h2>
                    <form method="post" action="form.php">
                        <label for="user" class="p-2" >
                            <input id="user" name="user" type="text" placeholder="Usuário" class="input-field">
                        </label>
                        <div class="input-icons">
                            <label for="password" class="password" style="position: relative;">

                                <input id="password" type="password" name="password" class="input-field"
                                    placeholder="Senha ">

                                <i class="fa-solid fa-eye eyes icon" onclick="hideEye(this)"></i>
                                <i class="fa-solid fa-eye-slash eyes d-none icon" onclick="hideEye(this)"></i>
                            </label>
                        </div>
                        <p> <small>Já tem conta?</small>   <a href="login.php">Login</a></p>
                        
                        <button class="btn btn-primary d-inline-flex align-items-center" type="submit">Entrar</button>
                    </form>
                </div>

            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img src="img-login.png" class="w-100" alt="" srcset="">
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>
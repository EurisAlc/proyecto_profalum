<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include ("./template/head.php");
    ?>

    <title>Acceder | PROFÁLUM</title>
</head>
    <!-- Formulario de sesión. -->
    <body class="page-login">
        <div class="">
            <a class="nav-link" aria-current="page" href="./home.php">
                <i style="font-size: 38px; color: #00204a;" class="bi-arrow-left-square"> </i>
            </a>
        </div>
        <div class="container-login">
            <form class="needs-validation" action="../controlador/loginUser.php" method="POST" autocomplete="off" novalidate>
                <div class="col-8 mb-4 mx-auto logo-login responsive">
                    <img class="text-aling-center" id="login-logo" src="./css/medios/logo-prof.png">
                </div>
                <div class="col-12 mb-5 text-center">
                    <h2 class="display-" style="color: #00204a; font-weight: 500;">Iniciar sesión</h2>
                    <hr class="border-bottom border-3 border-primary ">
                </div>
                <div class="row mt-2">
                    <div class="col-md-12 form-group input-group">
                        <span class="input-group-text">@</span>
                        <input type="text" name="usuario" class="form-control" placeholder="Usuario" required />
                        <div class="valid-feedback">Valido</div>
                        <div class="invalid-feedback">Por favor, ingrese un nombre de usuario valido.</div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12 form-group input-group">
                        <span class="input-group-text"><i class="bi-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Contraseña" required />
                        <div class="valid-feedback">Valido</div>
                        <div class="invalid-feedback">Su contraseña es incorrecta.</div>
                    </div>
                </div>
                <div class="row mt-4 mb-2">
                    <div class="col-md-12 form-group">
                        <label for="aceptar" class="form-check-label">
                            <input type="checkbox" class="form-check-input"> Recuérdame</label>
                    </div><br>
                </div>
                <div class="row ms-8">
                    <small>¿No tiene una cuenta? Regístrate <a href="./formulario.php">aquí</a></small>
                </div>
                <div name="error"><br>
                </div>
                <div class="row mt-5">
                <div class="col-md-12 text-center form-group">
                    <button type="submit" class="btn-login" name="login" id="btn" onclick="return accesoProf(this)">Iniciar sesión</button>
                </div>
        </div>
        </form>
    </body>
</html>


<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include ("./template/head.php");
    ?>
    <title>Crear cuenta | PROFÁLUM</title>
</head>

<body>
    <?php
        include ("./template/header.php");
    ?>
    <!-- Formulario de registro. -->
    <body class="page-login">
        <div class="row-mt-2 container-registro">
            <form class="formulario" id="formulario" action="../controlador/registroUser.php" method="POST" autocomplete="">
                <div class="col-12 mb-5">
                    <h2 class="display-" style="color: #00204a; font-weight: 500;">Detalles de la cuenta</h2>
                    <hr class="border-bottom border-3 border-primary">
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <div class="form-outline">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" pattern="[a-z-A-Z-á-ú]+" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline">
                            <label for="ape" class="form-label">Apellidos</label>
                            <input type="text" id="ape" name="ape" class="form-control" pattern="[a-z-A-Z-á-ú]+" required>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6 mb-3">
                        <div class="form-outline">
                            <label for="mail" class="form-label">E-mail</label>
                            <input type="email" id="mail" name="mail" class="form-control" placeholder="ejemplo@gmail.com" required>
                        </div>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="form-outline">
                            <label for="opciones" class="form-label">Docente de educación</label>
                            <select type="select" id="opciones" name="opciones" class="form-select">
                                <option value="Sin asignar">Sin asignar</option>
                                <option value="Primaria">Primaria</option>
                                <option value="Secundaria">Secundaria</option>
                                <option value="Universitaria">Universitaria</option>
                                <option value="Otros...">Otros...</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!--<div class="col-12 mb-5 border-bottom border-3 border-primary">
                    <h2 class="display-">Datos del usuario</h2>
                </div>-->
                <div class="col-5">
                    <div class="form-outline mb-3">
                        <label for="user" class="form-label">Nombre de usuario</label>
                        <input type="text" class="form-control" id="user" name="user" minlength="6" maxlength="15" required>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="form-outline">
                            <label for="pass" class="form-label">Contraseña</label>
                            <input type="password" id="pass" name="pass" class="form-control" minlength="8" maxlength="15" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-outline">
                            <label for="rPass" class="form-label">Repetir contraseña</label>
                            <input type="password" id="rPass" name="rPass" class="form-control" minlength="8" maxlength="15" required>
                        </div>
                    </div>
                    <p id="error" class="text-danger"> </p>
                </div>
                <div class="form-outline mb-2">
                    <label for="aceptar" class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="aceptar" id="aceptar" required> 
                        He leído y acepto los términos de <a href="./privacidad.php">política de privacidad</a>
                    </label>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center form-group">
                    <button type="submit" class="btn-form" name="registro" id="registro" onclick="return regUser(this)">Crear cuenta</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html
<?php
    session_destroy();
?>
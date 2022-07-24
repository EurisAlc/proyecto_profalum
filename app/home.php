<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<link rel="stylesheet" href="./css/normalize.css">-->
    <link rel="stylesheet" href="./css/lib/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./css/medios/logo-prof.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="./JS/rutas.js" type="text/javascript"></script>
    <script src="./JS/lib/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="./css/lib/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/74b33418b8.js" crossorigin="anonymous"></script>

    <title>PROFÁLUM</title>
</head>
    <?php
        include ("./template/header.php");
    ?>
<body>
    <!-- Portada. -->
    <div class="container-fluid portada">
        <div class="row">
        <div class="row col justify-content-center mx-auto">
            <img id="logoP" src="./css/medios/logo-prof.png" alt="logo PROFÁLUM">
        </div>
        <h1 class="h1"><span id="profalum">PROF<span id="alum">ÁLUM</span></span></h1>
        <div class="col-md-3"></div>
        <p class="col-md-6 col-lg-6 mt-4 mb-5 text-center" style="font-size: 18px; font-family: Montserrat; font-weight: 400;">
            Aplicación web orientada al profesorado. Diseñada para la <strong>gestión
            y planificación integral de la agenda escolar</strong>, tanto de centros públicos como privados.
            Proyecto integrado de Desarrollo de Aplicaciones Web.
        </p>
        <div class="col-md-3"></div>
        <div class="row col justify-content-center mx-auto">
            <button class="btn-log" type="button" onclick="login()">Login</button>
            <button class="btn-reg" type="button" onclick="registro()">Registrarse</button>
        </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white footerHome">
        <?php
            include ("./template/footer.php");
        ?>
    </footer>

</body>
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $("#logoP").hide();
            $("#logoP").fadeIn(2500);
        });
    });
</script>

</html>
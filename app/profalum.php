<?php
    // Comprobar el cierre de ssesión.
    include ('../controlador/controlSesion.php');
?>
<!DOCTYPE html>
    <html lang="es">

        <head>
            <?php
                include("./template/head.php");
            ?>
            <title>Inicio | PROFÁLUM</title>
        </head>
        <header>
            <?php
            include("./template/header-2.php");
            ?>
        </header>
    <body class="page-login">
        <div class="container-inicio">
            <div class="text-center">
                <h2 class="h2-user">¡Bienvenido(a) a <b>PROF</b>ÁLUM! <b><?php echo $nombreUser; ?></b></h2>
            </div><br><br>
            <p class="text-muted">Accesos rápidos</p>
            <hr>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 text-center g-4 acceso-rapido mt-4 mb-4">
                    <div class="cols-lg-3">
                        <a class="card card-item" href="./cuaderno.php"><i class="fa-solid fa-book fa-2x mb-3"></i><br>Mi Cuaderno</a> 
                    </div>
                    <div class="cols-lg-3">
                        <a class=" card card-item" href="./agenda.php"><i class="fa-solid fa-calendar-check fa-2x mb-3"></i><br> Agenda</a> 
                    </div>
                    <div class="cols-lg-3">
                        <a class="card card-item" href="#"><i class="fa-solid fa-circle-info fa-2x mb-3"></i><br>Soporte y ayuda</a>
                    </div>
                    <div class="cols-lg-3">
                        <a class="card card-item" href="#"><i class="fa-solid fa-envelope fa-2x mb-3"></i><br>Contactar</a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center text-white footerHome">
            <?php
                include("./template/footer-2.php");
            ?>
        </footer>
    </body>

</html>
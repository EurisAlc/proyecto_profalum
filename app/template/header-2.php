<!-- Plantilla. Barra de navegación 2 -->
<div class="container-fluid">
    <!-- Barra de navegación. -->
    <nav class="navbar fixed-top navbar-expand-lg border-3 border-bottom">
        <div class="container-fluid">
            <a href="./home.php" class="navbar-brand"><img src="./css/medios/logo_profalum.png" alt="logo_PROFÁLUM"></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navegacion"
                aria-controls="navBarNav" aria-expanded="false">
                <span id="menuBurger">
                    <i class="fa-solid fa-bars"></i>
                </span>
            </button>
            <div id="navegacion" class="collapse navbar-collapse dropdown-menu-right">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-auto">
                        <a class="nav-link active" aria-current="page" href="./profalum.php">
                            <i class="fa-solid fa-house"></i> Inicio</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" aria-current="page" href="./cuaderno.php">
                            <i class="fa-solid fa-book"></i> Cuaderno</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" aria-current="page" href="./agenda.php">
                            <i class="fa-solid fa-calendar-check"></i> Agenda</a>
                    </li>
                    <li class="nav-item ms-auto">
                        <a class="nav-link" aria-current="page" href="#">
                            <i class="fa-solid fa-circle-info"></i> Ayuda</a>
                    </li>

                    <!-- Submenu. Área de usuario. -->
                    <li class="nav-item dropdown ms-auto">
                         <a href="#" class="nav-link align-items-center dropdown-toggle" id="subMenu"
                        data-bs-toggle="dropdown" aria-expanded="false"> 
                        <strong> <i class="fa-solid fa-user-graduate"></i> <?php echo $nombreUser; ?></strong></a>
                        <ul class="dropdown-menu text-small shadow ms-auto">
                        <li>
                            <a class="dropdown-item" href="#">Mi perfil</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Configuración</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="../controlador/logoutUser.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
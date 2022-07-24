<?php
   // Se comprueba que la sesión está abierta.
    if(!isset($_SESSION['usuario'])){
        session_start();
    }

    // Se cierra sesión.
    session_destroy();
    header ("Location: ../app/login.php");
    exit();
?>
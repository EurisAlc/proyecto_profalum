<?php
    // Comprobar el cierre de ssesión.
    session_start();
    $nombreUser = $_SESSION['usuario'];
    if ($nombreUser == null){
        session_destroy();
        header ('Location: ./login.php');
    }
?>
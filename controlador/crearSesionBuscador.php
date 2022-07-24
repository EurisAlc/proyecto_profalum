<?php
    session_start();

    $id_alum = $_POST['valor'];

    $_SESSION['consulta'] = $id_alum;

    echo $id_alum;
?>
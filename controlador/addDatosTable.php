<?php
    include ('./conexion.php');
    $conex = conectar();

    // Almacenar los datos recividos por ajax en una variable.
    $nom = $_POST['nombre'];
    $asig = $_POST['asignatura'];
    $act1 = $_POST['actividad_1'];
    $act2 = $_POST['actividad_2'];
    $pract1 = $_POST['practica_1'];
    $pract2 = $_POST['practica_2'];
    $cuest = $_POST['cuestionario'];
    $exa = $_POST['examen'];
    $ntf = $_POST['nota_final'];

    // Consulta. Modificación o editar datos del alumno.
    $result = "INSERT INTO alumnos 
    (alumno, grupo_clase, actividad_1, actividad_2, practica_1, practica_2, cuestionario, examen, nota_final)
    VALUES ('$nom', '$asig', '$act1', '$act2', '$pract1', '$pract2', '$cuest', '$exa', '$ntf')";

    // devulve un valor 
    echo $query = mysqli_query($conex, $result) or die("Error: " . mysqli_error($conex));
?>
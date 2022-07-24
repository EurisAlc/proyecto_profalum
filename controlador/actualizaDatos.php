<?php
    include ('./conexion.php');
    $conex = conectar();

    // Almacenar los datos recividos por ajax en una variable.
    $id = $_POST['id_alum'];
    $nom = $_POST['nombre'];
    $asig = $_POST['asignatura'];
    $act1 = $_POST['actividad_1'];
    $act2 = $_POST['actividad_2'];
    $pract1 = $_POST['practica_1'];
    $pract2 = $_POST['practica_2'];
    $cuest = $_POST['cuestionario'];
    $exa = $_POST['examen'];
    $ntf = $_POST['nota_final'];

    // Consulta. Editar datos del alumno.
    $sql = "UPDATE alumnos SET 
        alumno = '$nom', 
        grupo_clase = '$asig',
        actividad_1 = '$act1',
        actividad_2 = '$act2',
        practica_1 = '$pract1',
        practica_2 = '$pract2',
        cuestionario = '$cuest',
        examen = '$exa',
        nota_final = '$ntf' 
        WHERE id_alumno = '$id'";
    
    echo $result = mysqli_query($conex, $sql) or die ("Error: " . mysqli_error($conex));
?>
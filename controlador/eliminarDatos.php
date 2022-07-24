<?php
    include ('../controlador/conexion.php');
    $conex = conectar();
    
    $id = $_POST['id_alum'];

    $sql = "DELETE FROM alumnos WHERE id_alumno = '$id'";
    
    echo $result = mysqli_query($conex, $sql) or die("Error: " . mysqli_error($conex));
?>
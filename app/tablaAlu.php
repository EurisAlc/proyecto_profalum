<?php
    session_start();
    include ('../controlador/conexion.php');
    $conex = conectar();
    $sql = "SELECT id_alumno, alumno, grupo_clase, actividad_1, actividad_2, 
    practica_1, practica_2, cuestionario, examen, nota_final FROM alumnos";
?>

<div class="panel-body">
    <caption>
        <button class="btn btn-tabla" data-bs-toggle="modal" data-bs-target="#registroAlu">
            Agregar alumno <span><i class="fa-solid fa-user-plus"></i></span>
        </button>
    </caption><br><br><br>
    <div class="table-responsive">
        <table id="tabla_alumnos" class="table table-hover table-condensed table-bordered table-striped">
            <thead>
                <tr id="headTabla">
                    <th>ID</th>
                    <th>Alumno</th>
                    <th>Grupo de clase</th>
                    <th>Actividad 1</th>
                    <th>Actividad 2</th>
                    <th>Práctica 1</th>
                    <th>Práctica 2</th>
                    <th>Cuestionario</th>
                    <th>Examen</th>
                    <th>Notal final</th>
                    <th></th>
                    <!--<th>Eliminar</th>-->
                </tr>
            </thead>
            <?php
                /*
                * Control de busqueda y visualización de los datos
                * en la tabla alumno.
                */
                if (isset($_SESSION['consulta'])){
                    if ($_SESSION['consulta'] > 0){

                        $id = $_SESSION['consulta'];

                        $sql = "SELECT id_alumno, alumno, grupo_clase, actividad_1, actividad_2, 
                        practica_1, practica_2, cuestionario, examen, nota_final 
                        FROM alumnos WHERE id_alumno = '$id'";
                    }
                }else {
                    $sql = "SELECT id_alumno, alumno, grupo_clase, actividad_1, actividad_2, 
                    practica_1, practica_2, cuestionario, examen, nota_final FROM alumnos";
                }
                    
                    $query = mysqli_query($conex, $sql) or die ("Error MySQL: " . mysqli_error($conex));

                    while ($row = mysqli_fetch_row($query)) {
                        
                        // Array de los datos del alumno.
                        $datos =$row[0]."||". 
                                $row[1]."||". 
                                $row[2]."||".
                                $row[3]."||". 
                                $row[4]."||". 
                                $row[5]."||". 
                                $row[6]."||". 
                                $row[7]."||". 
                                $row[8]."||". 
                                $row[9];

                ?>
            <!-- Mostrar los datos en la tabla -->
            <tr id="filasAlum">
                <th><?php echo $row[0]?></th>
                <th><?php echo $row[1]?></th>
                <th><?php echo $row[2]?></th>
                <th><?php echo $row[3]?></th>
                <th><?php echo $row[4]?></th>
                <th><?php echo $row[5]?></th>
                <th><?php echo $row[6]?></th>
                <th><?php echo $row[7]?></th>
                <th><?php echo $row[8]?></th>
                <th><?php echo $row[9]?></th>
                <th>
                    <!-- Botón editar -->
                    <button class="btn btn-primary center" data-bs-toggle="modal" data-bs-target="#editAlu" onclick="editarAlu('<?php echo $datos ?>')">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <!-- Botón eliminar -->
                    <button class="btn btn-danger" onclick="alertEliminar('<?php echo $row[0] ?>')">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </th>

            </tr>
            <?php 
                } 
                ?>
        </table>
    </div>
</div>
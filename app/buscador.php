<?php
    include ('../controlador/conexion.php');
    $conex = conectar();

    $query = "SELECT id_alumno, alumno, grupo_clase, actividad_1, actividad_2, practica_1, 
        practica_2, cuestionario, examen, nota_final 
        FROM alumnos";
    
    $query = mysqli_query($conex, $query) or die ("Error: " . mysqli_error($conex));
?>
<div class="row">
    <div class="col-sm-8"></div>
    <div class="col-sm-4">
        <label><strong style="color: #00204a;">Buscador... </strong></label>
        <span class="input-sm"><i style="color: #00204a;" class="fa-solid fa-magnifying-glass"></i></span>
        <select id="buscador" class="form-control input-sm">
            <option value="0">Selecciona uno</option>
            <?php
                while($row = mysqli_fetch_row($query)):
            ?>

            <option value="<?php echo $row[0] ?>">
                <?php echo $row[1] . " - " . $row[2] ?>
            </option>

            <?php endwhile; ?>
        </select>
    </div>
</div>
<br>

<script type="text/javascript">
    //1. Función buscar alumno o asignatura.
    $(document).ready(function () {
        $('#buscador').select2();
        
        // Evento de busqueda y filtrado de la tabla..
        $('#buscador').change(function () {
            
            $.ajax({
                type: 'POST',
                data: 'valor=' + $('#buscador').val(),
                url: '../controlador/crearSesionBuscador.php',
                success: function (recibir){
                    $('#tabla').load("../app/tablaAlu.php");
                }
            });
        });
    });
</script>
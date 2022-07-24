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
    <title>Mi cuaderno | PROFÁLUM</title>
</head>
<?php
    include("./template/header-2.php");
  ?>

<body class="page-login">
    <div class="container-cuaderno">
        <div class="text-center">
            <h1 class="h2-user"><b>CUADERNO DEL</b> <b style="color: #fcd462;">PROFESOR</b></h1>
            <hr>
        </div>
        <div class="panel panel-primary">

            <!-- Modal registro de alumno -->
            <div class="modal fade" id="registroAlu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalSave">Registro de Alumno</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--<div class="col-xs-2 col-md-3 input-group input-group-sm">
            <span class="input-group-addon"></span>
              <input type="number" name="" id="ide_alu" class="form-control input-sm" placeholder="ID Alumno">
            <span class="input-group-addon">
          </div><br>-->
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="text" name="" id="nombre" class="form-control input-sm" placeholder="Nombre del alumno">
                                <span class="input-group-addon">
                            </div><br>
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="text" name="" id="asignatura" class="form-control input-sm" placeholder="Asignatura">
                                <span class="input-group-addon">
                            </div><br>
                            <div class="col-xs-12 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="actividad_1" class="form-control input-sm" placeholder="Actividad 1">
                                <span class="input-group-addon"><span class="input-group-text">+</span></span>
                                <input type="number" name="" id="actividad_2" class="form-control input-sm" placeholder="Actividad 2">
                            </div><br>
                            <div class="col-xs-12 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="practica_1" class="form-control input-sm" placeholder="Practica 1">
                                <span class="input-group-addon"><span class="input-group-text">+</span></span>
                                <input type="number" name="" id="practica_2" class="form-control input-sm" placeholder="Practica 1">
                            </div><br>
                            <div class="col-xs-12 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="cuestionario" class="form-control input-sm" placeholder="Cuestionario">
                                <span class="input-group-addon"><span class="input-group-text">+</span></span>
                                <input type="number" name="" id="examen" class="form-control input-sm" placeholder="Examen">
                            </div><br>
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="nota_final" class="form-control input-sm" placeholder="Nota final">
                                <span class="input-group-addon">
                            </div><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="guardarNotas" class="btn btn-tabla" data-bs-dismiss="modal">Agregar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal editar alumno -->
            <div class="modal fade" id="editAlu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modalEdit">Editar Datos</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" hidden="" name="" id="id_alum">
                                <span class="input-group-addon">
                            </div><br>
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <!--<input type="text" hidden="" id="id_alum" name="">-->
                                <span class="input-group-addon"></span>
                                <input type="text" name="" id="nombreEdit" class="form-control input-sm" placeholder="Nombre del alumno">
                                <span class="input-group-addon">
                            </div><br>
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="text" name="" id="asignaturaEdit" class="form-control input-sm" placeholder="Asignatura">
                                <span class="input-group-addon">
                            </div><br>
                            <div class="col-xs-12 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="actividad1Edit" class="form-control input-sm" placeholder="Actividad 1">
                                <span class="input-group-addon"><span class="input-group-text">+</span></span>
                                <input type="number" name="" id="actividad2Edit" class="form-control input-sm" placeholder="Actividad 2">
                            </div><br>
                            <div class="col-xs-12 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="practica1Edit" class="form-control input-sm" placeholder="Practica 1">
                                <span class="input-group-addon"><span class="input-group-text">+</span></span>
                                <input type="number" name="" id="practica2Edit" class="form-control input-sm" placeholder="Practica 1">
                            </div><br>
                            <div class="col-xs-12 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="cuestionarioEdit" class="form-control input-sm" placeholder="Cuestionario">
                                <span class="input-group-addon"><span class="input-group-text">+</span></span>
                                <input type="number" name="" id="examenEdit" class="form-control input-sm" placeholder="Examen">
                            </div><br>
                            <div class="col-xs-2 col-md-3 input-group input-group-sm">
                                <span class="input-group-addon"></span>
                                <input type="number" name="" id="notaFinalEdit" class="form-control input-sm" placeholder="Nota final">
                                <span class="input-group-addon">
                            </div><br>
                        </div>
                        <div class="modal-footer ">
                            <button type="button" id="actualizar" class="btn btn-tabla" data-bs-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div><br>
            <div id="buscadorAlu"></div><br>
            <div id="tabla"></div>
        </div>
    </div>
    <footer class="text-center text-lg-start text-white footerHome">
        <?php
                include("./template/footer-2.php");
            ?>
    </footer>
</body>

</html>
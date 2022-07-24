//1. Función agregar datos del alumno.
function addDatos(nombre,asignatura,actividad_1,actividad_2,practica_1,practica_2,cuestionario,examen,nota_final) {
    
    
    datos = "nombre=" + nombre +
        "&asignatura=" + asignatura +
        "&actividad_1=" + actividad_1 +
        "&actividad_2=" + actividad_2 +
        "&practica_1=" + practica_1 +
        "&practica_2=" + practica_2 +
        "&cuestionario=" + cuestionario +
        "&examen=" + examen + 
        "&nota_final=" + nota_final;
    
    // Ajax. Envía los datos del registro de alumno al doc. php.
    $.ajax({
        type: "POST",
        url: "../controlador/addDatosTable.php",
        data: datos,

        // Se comprueba que lo que recibe.
        success: function (recibe) {
            if (recibe == 1) {
                // Recarga la página.
                $('#tabla').load("../app/tablaAlu.php"); // Actualizar tabla.
                $('#buscadorAlu').load('../app/buscador.php'); // Actualizar buscador.
                alertify.success("Alumno agregado con éxito.");
            }else{
                alertify.error("Error en el servidor.");
            }
        }
    });
}

//2. Función editar datos de la tabla Alumno.
// Carga los datos en el form modal.

function editarAlu(datos) {

    // El método split nos divide el array de los datos en subcadenas.
    reg = datos.split('||');

    // Almacena la subcadena del array en una posición.
    $('#id_alum').val(reg[0]);
    $('#nombreEdit').val(reg[1]);
    $('#asignaturaEdit').val(reg[2]);
    $('#actividad1Edit').val(reg[3]);
    $('#actividad2Edit').val(reg[4]);
    $('#practica1Edit').val(reg[5]);
    $('#practica2Edit').val(reg[6]);
    $('#cuestionarioEdit').val(reg[7]);
    $('#examenEdit').val(reg[8]);
    $('#notaFinalEdit').val(reg[9]);
    
}

//3. Actualizar los datos del alumno.

function actualizaDatos() {
    
   id = $('#id_alum').val();
   nombre = $('#nombreEdit').val();
   asignatura = $('#asignaturaEdit').val();
   actividad_1 = $('#actividad1Edit').val();
   actividad_2 = $('#actividad2Edit').val();
   practica_1 = $('#practica1Edit').val();
   practica_2 = $('#practica2Edit').val();
   cuestionario = $('#cuestionarioEdit').val();
   examen = $('#examenEdit').val();
   nota_final = $('#notaFinalEdit').val();

    datos = "id_alum=" + id +
        "&nombre=" + nombre +
        "&asignatura=" + asignatura +
        "&actividad_1=" + actividad_1 +
        "&actividad_2=" + actividad_2 +
        "&practica_1=" + practica_1 +
        "&practica_2=" + practica_2 +
        "&cuestionario=" + cuestionario +
        "&examen=" + examen +
        "&nota_final=" + nota_final;
    
    // Enviar los datos al doc. php y actualiza el registro en la BBDD.
    $.ajax({
        type: "POST",
        url: "../controlador/actualizaDatos.php",
        data: datos,

        // Se comprueba que lo que recibe.
        success: function (recibe) {
            if (recibe == 1) {
                // Carga los datos en la tabla en tiempo de ejecuación.
                $('#tabla').load("../app/tablaAlu.php");
                alertify.success("Datos actualizados.");
            } else {
                alertify.error("Error en el servidor.");
            }
        }
    });
}

//4. Función. Eliminar registro del alumno en la BBDD.
function alertEliminar(id_alum) {
    alertify.confirm('Eliminar Alumno', 'Acepte "OK" si está seguro de eliminar los datos del alumno.', function () { eliminarDatos(id_alum) }
        , function () { alertify.error('Cancelado.') });
}

function eliminarDatos(id_alum) {
    
    datos = "id_alum=" + id_alum;

    $.ajax({
        type: "POST",
        url: "../controlador/eliminarDatos.php",
        data: datos,
        success: function (recibe) {
            if (recibe == 1) {
                // Actualizar la página.
                $('#tabla').load("../app/tablaAlu.php");
                alertify.success("Alumno eliminado correctamente!");
            } else {
                alertify.error("Error en el servidor.");
            }
        }
    });
}
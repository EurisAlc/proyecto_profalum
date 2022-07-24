/*Tabla dinámica con jQuery. 
* Carga de la tabla alumno.
*/
// Control de carga del docmento.
$(document).ready(function () {
    // Cargar componentes al HTML.
    $('#tabla').load('../app/tablaAlu.php'); // Cargar tabla de alumnos
    $('#buscadorAlu').load('../app/buscador.php'); // Cargar buscador.
});

// Captura los datos de los inputs.
$(document).ready(function () {
    $('#guardarNotas').click(function () {
        nombre = $('#nombre').val();
        asignatura = $('#asignatura').val();
        actividad_1 = $('#actividad_1').val();
        actividad_2 = $('#actividad_2').val();
        practica_1 = $('#practica_1').val();
        practica_2 = $('#practica_2').val();
        cuestionario = $('#cuestionario').val();
        examen = $('#examen').val();
        nota_final = $('#nota_final').val();
        
        /* Llamada de la función del doc. addDatosjs
        * y carge el registro de forma asíncrona a 
        * la base de datos por medio de PHP.
        **/
        addDatos(nombre, asignatura, actividad_1, actividad_2, 
            practica_1, practica_2, cuestionario, examen, nota_final);
    });

    // Evento actualizar datos.
    $('#actualizar').click(function () {

        // Llamada de la función.
        actualizaDatos();
    });
});
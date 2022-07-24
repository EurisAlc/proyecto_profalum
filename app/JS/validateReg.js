/* Validación.
*  Lógica de validación de los datos introduciods en el formulario 
*  de registros para crear una cuenta en la aplicación. 
*/

function regUser() {

    // Validación de los inputs.
    var nombre = document.getElementById("name").value;
    if (nombre == "") {
        alert("El campo nombre no puede estar vacío");
        return false;
    }

    var apellidos = document.getElementById("ape").value;
    if (apellidos == "") {
        alert("Debe introducir sus apellidos");
        return false;
    }

    var email = document.getElementById('mail');
    var expRegular = /^([a-z-0-9_\.\-])+\@(([a-z-0-9\-])+\.)+([a-z-0-9]{2,4})+$/;

    if (!expRegular.test(email.value)) {
        alert('Por favor, ingrese un correo electrónico válido.');
        email.focus;
        return false;
    }

    var selectOpciones = document.getElementById("opciones").value;
    if (selectOpciones == "Sin asignar") {
        alert("Por favor, seleccione el tipo de educación");
        return false;
    }
    
    var usuario = document.getElementById("user");
    var expUser = /^([aA-zZ]+[0-9]{0,2}){6,15}$/;

    if (!expUser.test(usuario.value)) {
        alert('El nombre de usuario no es válido');
        return false;
    }

    // Control de contraseñas.
    var pass1 = document.getElementById("pass");
    var pass2 = document.getElementById("rPass");

    formulario.addEventListener("submit", (noRecarga) => { // Escuchar cuando se envíe el formulario.
        if (pass1.value !== pass2.value) { // Comprobar si los valores de los inputs son iguales, sino lo son continuar.
            noRecarga.preventDefault(); // Prevenir que la página se recargue
            error.innerHTML = "Las contraseñas no coinciden"; // Notificar al usuario.
            setTimeout(() => {
                error.innerHTML = " ";
            }, 2000); // Esperar 1.2 segundos y quitar el mensaje
        }
        return false;
    });

    var check = document.getElementById("aceptar");
    if (check.checked == false) {
        alert("Debe aceptar los términos de política de privacidad");
        return false;
    }
    return true;
}
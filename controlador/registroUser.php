<?php
    session_start();
    include ("./conexion.php");

    $conex = conectar(); // llamada de la función conectar() con la BBDD.
    $error_validacion = array();
    //$conex = conectar(); 
    if(isset($_POST["registro"])){
        
        //Impedir caracteres innecesarios.
        function test_input($dato){
            
            $dato = trim($dato); //Elimina los espacios.
            $dato = stripslashes($dato); // Elimina las barras inclinadas.
            $dato = htmlspecialchars($dato);
            return $dato;
        }

        // Validación de los datos.
        if (empty($_POST["name"])){
            $error_validacion[] = "El nombre es requerido. <br>";
        }
        if (empty($_POST["ape"])){
            $error_validacion[] = "El apellido es requerido. <br>";
        }

        if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL) || empty($_POST["mail"])){
            $error_validacion[] = "El correo electrónico no es valido. <br>";
        }
        
        if (empty($_POST["user"] || strlen($_POST["user"]) < 5 )){
            $error_validacion[] = "Usuario incorrecto o no es valido. <br>";
        }
        
        if (empty($_POST["pass"]) || strlen($_POST["pass"] < 6)){
            $error_validacion[] = "La contraseña no es valida. <br>";
        }

        // Datos del formulario.
        if (empty($error_validacion)){
            $nom = trim($_POST['name']);
            $ape = trim($_POST['ape']);
            $correo = trim($_POST['mail']);
            $docente = $_POST['opciones'];
            $nom_user = trim($_POST['user']);
            $password = sha1(trim($_POST['pass']));

            // Insertar datos en la base de datos.
            $consulta = "INSERT INTO usuarios
            (nombre, apellidos, email, docente, usuario, pass) 
            VALUES 
            ('$nom','$ape','$correo','$docente','$nom_user','$password')";

            $resultado = mysqli_query($conex, $consulta) or die ('Error: '. mysqli_error($conex));

            // Comprobación de registro.
            if($resultado){
                echo "<script type='text/javascript'>
                        alert ('!Te has registrado correctamente!');
                        window.location.href = '../app/home.php';
                    </script>";
            }else{
                echo "<script type='text/javascript'>
                        alert ('!Ups, se ha producido un error!');
                        window.location.href = '../app/formulario.php';
                    </script>";
            }
        }
        mysqli_close($conex);
    }
    session_destroy();
?>


<?php
    include ('./conexion.php');
    $conex = conectar();

    /*if(isset($_SESSION['usuario'])){
        header('Location: ../app/home.php');
    }*/
    if (isset($_POST['login'])){

        if (!empty($_POST['usuario']) || !empty($_POST['pass'])){
            $usuario = $_POST['usuario'];
            $password = sha1($_POST['pass']);

            // Búsqueda del usuario en la BD.
            $query = ("SELECT nombre, usuario, pass FROM usuarios 
            WHERE usuario = '$usuario' AND pass = '$password'");

            $result = mysqli_query($conex, $query) or die ('Error: '. mysqli_error($conex));

            $array = mysqli_fetch_array($result);
            
            // Condición. Si recibe o no los datos de user y pass.
            if ($array != 0){
                session_start();
                $_SESSION['usuario'] = $usuario;
                header('Location: ../app/profalum.php');
            }else{
                //session_destroy();
                //header ('Location: ../app/login.php');
                echo "<script>
                    alert ('Usuario o contraseña incorrecto');
                        window.location.href = '../app/login.php';
                </script>";
            }
        }else{
            //session_destroy();
            //header ('Location: ../app/login.php');
            echo "<script>
                alert ('Debe rellenar los campos para iniciar sessión');
                window.location.href = '../app/login.php';
            </script>";
        }
        mysqli_close($conex);
    }
?> 
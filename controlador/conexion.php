<?php
    function conectar(){
        $host = "localhost"; 
        $user = "root";
        $pass = "";
        $bd = "profalum_bd";

        // Conexión con la base de datos.
        $conex = mysqli_connect($host, $user, $pass);

        if (!$conex){
            die ("Error de conexión: " . mysqli_connect_error());
        }else{
            mysqli_select_db($conex, $bd);
        }
        return $conex;
    }

?>
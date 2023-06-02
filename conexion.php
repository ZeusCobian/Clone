<?php
    function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "convocatoria";
        $conexion = new mysqli($servername, $username, $password, $dbname);
        $conexion->set_charset("utf8");
        
        // Comprobar la conexión
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }else{
           
            return $conexion;
        }   
    }

    function desconectar($conexion){
        mysqli_close($conexion);
    }

// Ejecutar query
    function ejecutar($conexion, $query){
        if(mysqli_query($conexion, $query)){
            return true;    
        }else{
            echo mysqli_error($conexion);
        }
    }

//Ejecutar select
    function select($conexion, $query){
        return mysqli_query($conexion, $query);
    }


?>
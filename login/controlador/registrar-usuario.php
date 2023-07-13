<?php



        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "login";

        // Crear conexión
        $conexion = new mysqli($servername, $username, $password, $dbname);

        // Verificar si hay errores en la conexión
        if ($conexion->connect_error) {
            die("Error en la conexión: " . $conexion->connect_error);
        }
        //Verificar que los campos esten completos

        if (!empty($_POST["register"])) {
            if (empty($_POST["usuarioo"]) or empty($_POST["password"]) or empty($_POST["clave"])) {
                echo '<div><p>Debes completar todos los campos</p></div>';
            
            } else { //guardar datos de campos en variables
                $nombre = $_POST["usuarioo"];
                $password = $_POST["password"];
                $clave = $_POST["clave"];
                    //cargar mediante una consulta sql los datos a la base de datos
                $sql = $conexion->query("INSERT INTO personal(usuario, password, codigo) VALUES('$nombre', '$password', '$clave')");  
                //respuesta del servidor en caso de error o successful
                if ($sql == 1) {
                    echo '<label>Registro Exitoso</label>';
                    
                } else{
                    echo 'ERROR';
                }
            }
            
    
        }

    

        
    ?>
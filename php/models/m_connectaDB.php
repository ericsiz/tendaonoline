<?php 
    function connectaBD(){
        $servername = "db";
        $username = "user";
        $password = "password";
        $dbname = "mydatabase";

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
       
        return ($conn);
    }

?>
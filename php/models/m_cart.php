<?php 

function consultaProductePerId($conn, $id) {
    $sql = "SELECT * FROM Producto WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}


function registraCompra($conn, $username, $price) {
    // Generar un ID aleatorio entre 1 y 100000
    $id = rand(1, 100000);

    // Preparar la consulta SQL
    $sql = "INSERT INTO Compras (ID, User, Price, Time) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }

    // Enlazar los parámetros y ejecutar la consulta
    $stmt->bind_param('isd', $id, $username, $price);
    $stmt->execute();

    // Verificar si la inserción fue exitosa
    if ($stmt->affected_rows > 0) {
        return true;
    } else {
        return false;
    }
}



?>

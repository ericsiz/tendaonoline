<?php

function consultaPerfilperUser($conn,$perfil){
    $sql = "SELECT * FROM Usuarios WHERE Username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $perfil);;
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Función para consultar todas las compras realizadas por un usuario
function consultaCompresperUser($conn, $username) {
    $sql = "SELECT * FROM Compras WHERE User = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die('Error en la preparación de la consulta: ' . $conn->error);
    }
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $compras = [];
    while ($compra = $result->fetch_assoc()) {
        $compras[] = $compra;
    }
    return $compras;
}
?>
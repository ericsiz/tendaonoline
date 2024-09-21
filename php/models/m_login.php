<?php
function verificaUsuario($conn, $username, $password) {
    $sql = "SELECT * FROM Usuarios WHERE Username = ? AND Password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows > 0) {
        return true;
    } else {
        return false;
    }
}
?>

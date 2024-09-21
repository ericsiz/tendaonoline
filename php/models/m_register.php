<?php 
function registraUsuario($conn, $username, $email, $password, $name, $surname, $telNumber) {
    // Encriptar la contraseña
    // $passwordHash = password_hash($password, PASSWORD_BCRYPT);

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO Usuarios (Username, Mail, Password, Name, Surname, TelNumber) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $username, $email, $password, $name, $surname, $telNumber);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
?>
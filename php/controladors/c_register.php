<?php
// session_start(); // Inicia la sesión si no está ya iniciada

include_once __DIR__ . "/../models/m_connectaDB.php";
include_once __DIR__ . "/../models/m_register.php";

$error = false;

$conn = connectaBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $telNumber = $_POST['TelNumber'];

    if ($password === $confirmPassword) {
        if (registraUsuario($conn, $username, $email, $password, $name, $surname, $telNumber)) {
            // Registro exitoso
            $_SESSION['message'] = "Usuario registrado exitosamente";
            header("Location: ../index.php?button=default");
            exit();
        } else {
            // Error al registrar
            $_SESSION['error'] = "Error al registrar el usuario";
            header("Location: ../index.php?button=register");
            exit();
        }
    } else {
        // Las contraseñas no coinciden
        $_SESSION['error'] = "Las contraseñas no coinciden";
        header("Location: ../index.php?button=register");
        exit();
    }
} else {
    include_once __DIR__ . "/../vistes/v_register.php";
}
?>

<?php 
include_once __DIR__ . "/../models/m_connectaDB.php";
include_once __DIR__ . "/../models/m_login.php";

//session_start();//  // Inicia la sesión si no está ya iniciada

$error = false;

$conn = connectaBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (verificaUsuario($conn, $username, $password)) {
        // Credenciales correctas
        $_SESSION['username'] = $username;
        $_SESSION['login_error'] = false;
        header("Location: index.php?button=default");
        exit();
    } else {
        // Credenciales incorrectas
        $_SESSION['login_error'] = true;
        header("Location: index.php?button=login");
        exit();
    }
}
// Muestra la vista de login, con la variable de error
include_once __DIR__ . "/../vistes/v_login.php";
?>

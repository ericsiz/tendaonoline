<?php
session_start();
$button = isset($_GET['button']) ? $_GET['button'] : 0;
$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'add_to_cart' && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = 1;
    } else {
        $_SESSION['cart'][$product_id]++;
    }
    // Responder con un mensaje de éxito
    echo 'success';
    exit();
}



if (isset($_GET['button'])) {
    switch ($button) {

        case ('login'):
            include_once __DIR__ . "/controladors/c_login.php";
            include_once __DIR__ . "/controladors/c_footer.php";
            break;

        case ('register'):
            include_once __DIR__ . "/controladors/c_register.php";
            include_once __DIR__ . "/controladors/c_footer.php";
            break;
        case ('logout'):
            $_SESSION = array();
            session_destroy();
            include_once __DIR__ . "/models/m_connectaDB.php";
            include_once __DIR__ . "/controladors/c_header.php";
            include_once __DIR__ . "/controladors/c_productes.php";
            include_once __DIR__ . "/controladors/c_footer.php";
            include_once __DIR__ . "/controladors/c_desplegable.php";
            break;
        case ('cart'):
            include_once __DIR__ . "/models/m_connectaDB.php";
            include_once __DIR__ . "/controladors/c_cart.php";
            include_once __DIR__ . "/controladors/c_footer.php";
            break;

        case('perfil'):
            include_once __DIR__ . "/controladors/c_perfil.php";
            include_once __DIR__ . "/controladors/c_footer.php";
            break;
        default:
            include_once __DIR__ . "/models/m_connectaDB.php";
            include_once __DIR__ . "/controladors/c_desplegable.php";
            include_once __DIR__ . "/controladors/c_header.php";
            include_once __DIR__ . "/controladors/c_productes.php";
            include_once __DIR__ . "/controladors/c_footer.php";

            break;
    }
} else {
    // Por defecto, si no se proporciona el parámetro button
    include_once __DIR__ . "/models/m_connectaDB.php";
    include_once __DIR__ . "/controladors/c_desplegable.php";
    include_once __DIR__ . "/controladors/c_header.php";
    include_once __DIR__ . "/controladors/c_productes.php";
    include_once __DIR__ . "/controladors/c_footer.php";

}

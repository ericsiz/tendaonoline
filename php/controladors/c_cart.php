<?php

if (isset($_POST['buy'])) {
 session_start();// Asegúrate de iniciar la sesión al principio del archivo
}
include_once __DIR__ . "/../models/m_connectaDB.php";
include_once __DIR__ . "/../models/m_cart.php";

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$products_in_cart = [];
$total = 0;

$conn = connectaBD();

foreach ($cart as $product_id => $quantity) {
    $product = consultaProductePerId($conn, $product_id);
    if ($product) {
        $product['quantity'] = $quantity;
        $products_in_cart[] = $product;
        $total += $quantity * $product['Price'];
    }
}

// Manejo de la compra
if (isset($_POST['buy'])) {
    if (!isset($_SESSION['username'])) {
        echo 'Error: Usuario no autenticado.';
        exit();
    }

    $username = $_SESSION['username'];
    if (registraCompra($conn, $username, $total)) {
        // Vaciar carrito después de la compra
        $_SESSION['cart'] = [];
        header("Location: ../index.php?button=default"); // Redirigir a una página de agradecimiento
        exit();
    } else {
        echo 'Error al registrar la compra.';
    }
}

include_once __DIR__ . "/../vistes/v_cart.php";
?>

<?php
// comprar.php

// Configuración del correo
$to = 'cliente@example.com'; // Aquí deberías colocar la dirección del cliente o la del usuario logueado
$subject = 'Confirmación de Compra';
$headers = "From: no-reply@tusitio.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Obtener los datos enviados por POST
$products = $_POST['products']; // JSON con la información de los productos
$total = $_POST['total']; // Total de la compra

// Generar el contenido del correo
$message = "<html><body>";
$message .= "<h1>Gracias por tu compra</h1>";
$message .= "<p>Estos son los detalles de tu compra:</p>";
$message .= "<ul>";

$products = json_decode($products, true);

foreach ($products as $product) {
    $message .= "<li>";
    $message .= "<img src='{$product['Image']}' alt='{$product['Name']}' style='width: 100px; height: 100px;'><br>";
    $message .= "<strong>{$product['Name']}</strong><br>";
    $message .= "Precio: {$product['Price']}€<br>";
    $message .= "Cantidad: {$product['quantity']}<br>";
    $message .= "</li>";
}

$message .= "</ul>";
$message .= "<p>Total: $total €</p>";
$message .= "<p>¡Gracias por comprar con nosotros!</p>";
$message .= "</body></html>";

// Enviar el correo
$mail_sent = mail($to, $subject, $message, $headers);

// Responder al cliente
echo json_encode(['success' => $mail_sent]);
?>

<?php 
    include_once __DIR__ . "/../models/m_productes.php";
    $conn = connectaBD();
    $productes = consultaProductes($conn);
    include_once __DIR__ . "/../vistes/v_productes.php"
?>
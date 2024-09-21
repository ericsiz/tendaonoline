<?php 

include_once __DIR__ ."/../models/m_connectaDB.php";
include_once __DIR__."/../models/m_perfil.php";

$username = $_SESSION['username'];
$conn = connectaBD();

$perfil = consultaPerfilperUser($conn, $username);

$compres = consultaCompresperUser($conn, $username);


include_once __DIR__ . "/../vistes/v_perfil.php";

?>
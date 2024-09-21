<?php 

function consultaProductes($conn){
    $sql = "SELECT * FROM Producto";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error sql: " . $conn->error);
    }

    $productes = [];

    while ($row = $result->fetch_assoc()) {
        $productes[] = $row;
    }

    return $productes;
}

?>

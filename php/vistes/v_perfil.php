<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="/../css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <h1>Perfil de Usuario</h1>
        <div class="profile-info">
            <p><i class="fas fa-user icon"></i><span class="label">Nombre de Usuario:</span> <span class="value"><?php echo htmlspecialchars($perfil['Username']); ?></span></p>
            <p><i class="fas fa-user icon"></i><span class="label">Nombre:</span> <span class="value"><?php echo htmlspecialchars($perfil['Name']); ?></span></p>
            <p><i class="fas fa-user icon"></i><span class="label">Apellido:</span> <span class="value"><?php echo htmlspecialchars($perfil['Surname']); ?></span></p>
            <p><i class="fas fa-envelope icon"></i><span class="label">Correo Electrónico:</span> <span class="value"><?php echo htmlspecialchars($perfil['Mail']); ?></span></p>
            <p><i class="fas fa-phone icon"></i><span class="label">Teléfono:</span> <span class="value"><?php echo htmlspecialchars($perfil['TelNumber']); ?></span></p>
        </div>

        <h2>Historial de Compras</h2>
        <div class="purchase-history">
            <?php if (!empty($compres)): ?>
                <ul>
                    <?php foreach ($compres as $compra): ?>
                        <li>
                            <p><strong>ID Compra:</strong> <?php echo htmlspecialchars($compra['ID']); ?></p>
                            <p><strong>Precio:</strong> <?php echo htmlspecialchars($compra['Price']); ?> €</p>
                            <p><strong>Fecha:</strong> <?php echo htmlspecialchars($compra['Time']); ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No has realizado ninguna compra.</p>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>

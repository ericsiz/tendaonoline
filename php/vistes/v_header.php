<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ComputerRangs</title>
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div id="header">
        <div id="titol">
            <h1>Computer Rangs</h1>
        </div>
        <div id="iconos">
            <h1>
                <div class="icon-container">
                    <a href="#"><i class="fas fa-user"></i></a>
                    <span id="notification-dot" class="notification-dot"></span>
                    <div class="dropdown">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <a href="index.php?button=perfil">Perfil</a>
                            <a href="index.php?button=cart">Carro de compras</a>
                            <a href="index.php?button=logout">Cerrar sesión</a>
                        <?php } else { ?>
                            <a href="index.php?button=login">Iniciar sesión</a>
                            <a href="index.php?button=register">Registrarse</a>
                        <?php } ?>
                    </div>
                </div>
            </h1>
        </div>
    </div>
</body>
</html>

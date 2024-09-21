<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <a href="index.php?button=0" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
    <div class="login-container">
        <form action="index.php?button=login" method="post">
            <label for="username">Nombre de usuario</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Iniciar Sesión">
        </form>
        <div id="register">
            <p>No tienes una cuenta asociada con nosotros?</p>
            <a href="index.php?button=register">
                <p>Regístrate</p>
            </a>
            <?php if (isset($_SESSION['login_error']) && $_SESSION['login_error']) { ?>
                <p style="color: red;">Identificación incorrecta</p>
            <?php } ?>
        </div>
    </div>

    <div>
        <img src="../images2/Paz.gif" alt="Imagen InicioSesion">
    </div>
</body>

</html>

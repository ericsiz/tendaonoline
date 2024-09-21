<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
<a href="index.php?button=0" class="back-arrow"><i class="fas fa-arrow-left"></i></a>
    <div class="register-container">
        <form action="../controladors/c_register.php" method="post">
            <label for="username">Nombre de usuario</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirmar contraseña</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label for="Name">Nombre</label>
            <input type="text" id="Name" name="Name" required>

            <label for="Surname">Surname</label>
            <input type="text" id="Surname" name="Surname" required>

            <label for="TelNumber">Telefóno</label>
            <input type="text" id="TelNumber" name="TelNumber" required>

            <input type="submit" value="Registrar">
        </form>
    </div>

    <div>
        <img src= "../images2/Super-Mario-Bros-Game-Transparent-PNG.png" alt="Imagen InicioSesion">
    </div>
</body>

</html>

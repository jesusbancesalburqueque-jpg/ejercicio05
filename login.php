<?php
$tiene_error = isset($_GET["error"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicio de Sesión</h1>

    <?php if ($tiene_error): ?>
        <p style="color: red;">Correo o contraseña incorrectos.</p>
    <?php endif; ?>

    <form action="validar.php" method="POST">
        <label for="correo"><strong>Correo: </strong></label>
        <input type="email" name="txtCorreo" id="correo">
        <br><br>
        <label for="clave"><strong>Clave: </strong></label>
        <input type="password" name="txtClave" id="clave">
        <br><br>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
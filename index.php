<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./Resources/css/style.css">
</head>

<body>

    <div class="login-container">
        <h1>Login</h1>
        <?php if (isset($_SESSION['errorLogin']))
            echo "<h2>" . $_SESSION['errorLogin'] . "</h2>" ?>
        <form action="./Core/log.php" method="POST">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>

            <button type="submit">Iniciar sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
    </div>

</body>

</html>
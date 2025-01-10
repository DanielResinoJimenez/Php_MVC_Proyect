<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./../Resources/css/style.css">
    <link rel="stylesheet" href="./Resources/css/style.css">
</head>

<body>

    <div class="login-container">
        <h1>Login</h1>
        <form action="./index.php?action=loginUser" method="POST">
            <label for="username">Usuario</label>
            <input type="text" id="username" name="username" placeholder="Ingresa tu usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="/register">Regístrate aquí</a></p>
        <?php
        if (isset($_GET['user'])) {
            echo "<span>Usuario o contraseña inválidos</span>";
        }
        ?>
    </div>

</body>

</html>
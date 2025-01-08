<?php

include './BD.php';
session_start();

try {
    $usuarios = ;
    while ($user = $usuarios->fetch()) {
        if ($user['nombre'] == $usuario && $user['password'] == $paswd) {
            echo "usuario registrado";
            if ($user['rol'] == 'administrador') {
                header("location: ./../Views/BiblioView.php");
            } else {
                header("location:../userviews/index.php");
            }
        } else {
            $_SESSION['errorLogin'] = "Error al iniciar sesión";
            header("Location: ./../index.php");
        }
    }
} catch (PDOException $excepcion) {
    echo "Error en la consulta de tipo " . $excepcion->getMessage();
}

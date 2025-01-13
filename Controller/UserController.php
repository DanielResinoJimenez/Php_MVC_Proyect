<?php

require_once "Core/BD.php";
require_once "Models/UserModel.php";

class UserController
{

    private $user;

    public function __construct()
    {
        $bd = new BD();
        $connection = $bd->getPDO();
        $this->user = new User($connection);
    }

    public function validationReturn($user, $pass)
    {

        // Si la función creada en el modelo devuelve true.
        if ($this->user->validUser($user, $pass)) {

            header("Location: View/BiblioView.php");

            // Si la función no devuelve nada.
        } else {

            header("Location: index.php?user=not_found");
        }
    }

    public function logout()
    {
        $this->user->logout();
        header("Location: index.php");
    }
}

<?php

// Creamos la clase usuario

class User
{

    public $pdo;
    public $bd;

    public function __construct($bd)
    {
        $this->pdo = $bd;
    }

    public function validUser($user, $pass)
    {

        try {

            $stmt = $this->pdo->prepare("SELECT * FROM usuarios");
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if ($row['nombre'] == $user && $row['contrasena'] == $pass) {
                    return true;
                }
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

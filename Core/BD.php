<?php

include_once './../Config/BiblioConfig.php';

class BD
{
    private $pdo;
    public function __construct()
    {
        global $host, $dbname, $contraseña, $usuario;
        try {
            // Crea una instancia de PDO para conectarse a la base de datos
            $this->pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contraseña);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
    // Obtiene una instancia de PDO
    public function getPDO()
    {
        return $this->pdo;
    }
}

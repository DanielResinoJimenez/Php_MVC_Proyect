<?php

include_once './../Core/BD.php';

class BiblioModel
{
    private $pdo;
    private $bd;

    public function __construct()
    {
        $this->bd = new DB(); //Crear instancia de DB
        $this->pdo = $this->bd->getPDO(); //Obtener el objeto PDO
    }

    public function getLibros()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM libros');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

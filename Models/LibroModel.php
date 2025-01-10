<?php

require_once(__DIR__ . '/../Core/BD.php');

class BiblioModel
{
    public $pdo;
    public $bd;

    public function __construct()
    {
        $this->bd = new BD(); //Crear instancia de DB
        $this->pdo = $this->bd->getPDO(); //Obtener el objeto PDO
    }

    public function getLibros()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM libros');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifyLibros($ISBN, $titulo, $autor){
        $stmt = $this->pdo->query('UPDATE TABLE libros SET "titulo" = $titulo, "autor" = $autor WHERE "ISBN" = $ISBN');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

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

    public function insertLibros($ISBN, $nombre, $autor)
    {
        $stmt = $this->pdo->query("INSERT INTO libros values ('" . $ISBN . "', '" . $nombre . "', '" . $autor . "')");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifyLibros($ISBN, $titulo, $autor)
    {
        $stmt = $this->pdo->query('UPDATE libros SET titulo = "' . $titulo . '", autor = "' . $autor . '"  WHERE ISBN = "' . $ISBN . '"');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteLibro($ISBN)
    {
        $stmt = $this->pdo->query('DELETE FROM libros WHERE ISBN = "' . $ISBN . '"');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function reservLibro($id_usu, $isbn)
    {
        session_start();
        $ID = $_SESSION['user_id'];

        $fechaReserva = date("Y-m-d");
        $fechaDevuelta = date("Y-m-d", strtotime("+30 days"));
        $stmt = $this->pdo->query('INSERT INTO prestamos VALUES ("' . $ID . '", "' . $isbn . '", "' . $fechaReserva . '", "' . $fechaDevuelta . '")');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

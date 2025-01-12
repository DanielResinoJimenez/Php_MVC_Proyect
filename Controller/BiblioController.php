<?php

require_once "Core/BD.php";
require_once "Models/LibroModel.php";

class BiblioController
{

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;


    public function __construct()
    {
        $this->model = new BiblioModel();
    }

    // Muestra la lista de las tareas
    public function listarLibros()
    {

        // Recupera la lista de libros del modelo
        $libros = $this->model->getLibros();

        include_once './View/ListarView.php';
    }

    // Insertar libros
    public function insertarLibro($ISBN, $titulo, $autor)
    {
        $this->model->insertLibros($ISBN, $titulo, $autor);
    }

    // Modificar Libros

    public function modificarLibro($ISBN, $titulo, $autor)
    {
        $this->model->modifyLibros($ISBN, $titulo, $autor);
    }

    // Borrar un Libro

    public function borrarLibro($ISBN)
    {
        $this->model->deleteLibro($ISBN);
    }

    // Reservar un libro

    public function reservLibro($id_usu, $isbn)
    {
        $this->model->reservLibro($id_usu, $isbn);
    }
}

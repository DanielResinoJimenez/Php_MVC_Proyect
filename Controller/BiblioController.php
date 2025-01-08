<?php

class BiblioController
{

    // Obtiene una instancia del modelo y de la vista de tareas
    private $model;
    private $view;
    public function __construct()
    {
        $this->model = new BiblioModel();
        $this->view = new ListarLibros();
    }

    // Muestra la lista de las tareas
    public function listarLibros()
    {

        // Recupera la lista de tareas del modelo
        $tareas = $this->model->getLibros();

        // Muestra la vista de la lista de tareas
        $this->view->mostrarLibros($tareas);
    }
}

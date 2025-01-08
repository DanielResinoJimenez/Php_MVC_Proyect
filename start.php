<?php

include './Models/LibroModel.php';
include './View/BiblioView.php';
include './Controller/BiblioController.php';

$libros = new BiblioController();

$libros->listarLibros();

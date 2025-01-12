<?php

require_once './Controller/UserController.php';
require_once './Controller/BiblioController.php';

$action = $_GET['action'] ?? '';

if ($action == "loginUser") {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $controller = new UserController();
    $controller->validationReturn($user, $pass);
} elseif (!isset($_GET['action'])) {
    include_once './View/UserView.php';
} elseif ($action == "start") {
    header("Location: ./View/BiblioView.php");
} elseif ($action == "listarLibros") {
    $controller = new BiblioController();
    $controller->listarLibros();
} elseif ($action == "insertLibros") {
    header("Location: ./View/InsertLibros.php");
} elseif ($action == "insert") {
    header("Location: ./View/BiblioView.php?action=null");
    $controller = new BiblioController();
    $controller->insertarLibro($_POST['isbn'], $_POST['titulo'], $_POST['autor']);
} elseif ($action == "modifyLibros") {
    header("Location: ./View/modiLibros.php");
} elseif ($action == "modify") {
    $controller = new BiblioController();
    $controller->modificarLibro($_POST['isbn'], $_POST['titulo'], $_POST['autor']);
    header("Location: ./View/BiblioView.php?action=null");
} elseif ($action == "deleteLibros") {
    header("Location: ./View/BorrarLibros.php");
} elseif ($action == "delete") {
    $controller = new BiblioController();
    $controller->borrarLibro($_POST['isbn']);
    header("Location: ./View/BiblioView.php?action=null");
} elseif ($action == "reservLibro") {
    header("Location: ./View/ReservLibro.php");
} elseif($action == "reservar"){
    $controller = new BiblioController();
    
}

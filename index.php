<?php

require_once './Controller/UserController.php';

$action = $_GET['action'] ?? '';

if ($action == "loginUser") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $controller = new UserController();
    $controller->validationReturn($user, $pass);
} else {
    include_once './View/UserView.php';
}

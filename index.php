<?php

    // routes

    require_once('controllers/ClientsController.php');
    use controllers\ClientsController;
    $action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

    $controller = new ClientsController();
    $controller->{$action}();

?>
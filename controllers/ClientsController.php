<?php

namespace controllers;

use models\Client;

require_once('models/Client.php');

class ClientsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Client();
    }

    public function getAll()
    {
        $resultData = $this->model->getAll();
        require_once('views/index.php');
    }

}
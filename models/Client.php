<?php

namespace models;

use Connect;

require_once('configuration/connect.php');

class Client extends Connect
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'clients';
    }

    public function getAll()
    {
        $sqlSelect = $this->connection->query("SELECT * FROM $this->table");
        $resultQuery = $sqlSelect->fetchAll();
        return $resultQuery;
    }
}
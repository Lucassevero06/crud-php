<?php
//Conexão com banco de dados

    define('HOST', 'localhost');
    define('USER', 'lucas');
    define('PASSWORD', 'Leonardo24#');
    define('DATABASENAME', 'crud-php');

    class Connect
    {
        protected $connection;

        public function __construct()
        {
            $this->connectDataBase();
        }
        public function connectDataBase()
        {
            try {
                $this->connection = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASENAME, USER, PASSWORD);
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
                die();
            }
        }

    }
?>


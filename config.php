<?php 

    $dbHost = 'Localhost';
    $dbUser = 'lucas';
    $dbPass = 'Leonardo24#';
    $dbName = 'formulario-users';

    $conexao = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conexao->connect_error) {
        echo "Erro na conexão: " . $conexao->connect_error;
    } else {
        echo "Conexão realizada com sucesso!";
    }

?>
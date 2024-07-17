<?php 

    $dbHost = 'Localhost';
    $dbUser = 'lucas';
    $dbPass = '31032006';
    $dbName = 'formulario-users';

    $conexao = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($conexao->connect_error) {
        echo "Erro na conexão: " . $conexao->connect_error;
    } else {
//        echo "Conexão com Banco de Dados feita com sucesso!";
    }

?>
<?php

    $dbHost = '127.0.0.1';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'testelogin';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*if($conexao -> connect_errno)
    {
        echo 'Erro';
    }
    else
    {
        echo 'Conexão Efetuada com sucesso';
    }*/


?>
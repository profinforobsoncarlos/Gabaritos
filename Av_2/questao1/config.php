<?php
    //CONFIG. DE CREDENCIAIS
    $server = 'localhost';
    $usuario = 'root';
    $usuario = '';
    $banco = 'cadastro';

    //CONEXÃO COM BD
    $conn = new mysqli($server, $usuario, $senha, $banco);

    //VERIFICAR CONEXÃO
    if ($conn-> connect_error) {
        die("Falha ao se comunicar com banco de dados:". $conn->connect_error);
    }
?>
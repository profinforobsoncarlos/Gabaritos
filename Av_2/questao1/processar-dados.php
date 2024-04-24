<?php
    require_once 'config.php';

    //PEGANDO OS DADOS VINDOS DO FORM
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    
    //PREPARAR COMANDO PARA TABELA
    $smtp = $conn->prepare("INSERT INTO cadastro (nome, idade) VALUES (?,?)");
    $smtp->bind_param("si", $nome, $idade);

    //SE EXECUTAR CORRETAMENTE
    if ($smtp->execute()) {
        echo "Mensagem enviada com sucesso!";
    }
    else {
        echo "Erro no envio da mensagem: ". $smtp->error;
    }

    $smtp->close();
    $conn->close();
    



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão4: Formulário de Cadastro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2{
            text-align:justify;
            
        }
        fieldset{
            margin-right: 100px;
            margin-left: 100px;
        }
        input{
            margin-left: 60px;
            margin-top: 5px;
            width: 200px;
            height: 20px;
        }
        span{
            font-size: 50px;
        }
        

    </style>
</head>
<body>
<!--
Peça do usuário; Nome Completo; E-mail;
Data Nascimento; Sexo; Status de civil;
Profissão.
Na 2ª tela exiba:
Nome Completo
Idade
Profissão
-->
<div>
    <h2>Formulário de Cadastro</h2> 
    <?php
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $datanasc = $_GET["datanasc"];
        $datanasc = date("Y",strtotime($datanasc));
        $sexo = $_GET["Sexo"];
        $est_civil = $_GET["estado_civil"];
        $prof = $_GET["profissao"];
        $idade = date("Y") - $datanasc;
        echo "<h2>Recebemos o Cadastro de $nome.</h2>";
        echo "<h2>$idade anos</h2>";
        echo "<h2>Estado civil: $est_civil</h2>";
        echo "<h2>Profissão: $prof.</h2>"

        
    ?>    
    <a href="questao4.html"><button>Voltar</button></a>

</div>    
</body>
</html>
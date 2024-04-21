<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão3: Status - Aluno</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        h2{
            text-align: center;
            
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
Crie uma tela onde peça as 4 notas de um aluno e
calcule a média, em seguida mostre se ele está
APROVADO, RECUPERAÇÃO OU REPROVADO.
<=7 Aprovado;
>=5 e <=6 Recuperação;
<5 Reprovado.
-->
<div>
    <h2>Escola Municipal Sol Nascente <br/> - Média e Situação do aluno - </h2>
    <?php
        $nome = $_GET["aluno"];
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4; 
        
        if ($media <5) {
            $situacao = "REPROVADO! \u{1F62D}";
        }
            elseif ($media <7) {
                $situacao = "RECUPERAÇÃO! \u{1F622}";
            }
                else {
                    $situacao = "APROVADO! \u{1F929}";
                    }
        echo "<h2>Aluno: $nome</h2>";
        echo "<h2>Média: ". number_format($media, 2, ",")."</h2>";
        echo "<h2>Situação do aluno: $situacao</h2>";        
    ?>
        <br/><br/>
        <a href="questao3.html"><button>Voltar</button></a>

</div>    
</body>
</html>
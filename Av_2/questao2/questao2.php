<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão2: Status - Idade</title>
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
Crie uma tela onde peça o nome e o ano do usuário,
calcule a idade e mostre de acordo com a tabela abaixo.
Criança (1 – 11 anos)
Adolescente (12-14 anos)
Jovem (15-18 anos)
Adulto (19 – 64 anos)
Idoso ( mais de 65 anos
-->
<div>
    <h2>Status - Idade</h2>
    <?php
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $idade = date("Y")-$ano;
        
        if ($idade <12) {
            $status = " uma CRIANÇA <span>&#x1F6B8</span>";
        }
            elseif ($idade <= 14) {
                $status = " ADOLESCENTE <span>&#x1F467 &#x1F466</span>";
            }
                elseif ($idade <=18) {
                    $status = " JOVEM <span>&#x1F9D1 &#x1F9B0</span>";
                }
                    elseif ($idade <=64) {
                        $status = " ADULTO <span>&#x1F471 &#x1F471</span>";
                    }
                        else {
                            $status = " IDOSO(A) <span>&#x1F475 &#x1F474</span>";
                        }
        
        echo "<h2>Olá, $nome, verificamos que você tem $idade ano(s), você é $status.<h2>";
    ?>
        <a href="questao2.html"><button>Voltar</button></a>   
</div>
    
</body>
</html>
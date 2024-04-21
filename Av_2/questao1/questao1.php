<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão1: Conversor de Real -> Dólar</title>
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
        button{
            margin-left: 230px;
            margin-top: 10px;

        }

    </style>
</head>
<body>
<!--
    Conversor de Real ➔ Dólar
Crie uma tela onde o usuário insira um valor
em R$ e em outra tela obtenha a conversão
em UU$ Dólar.
Ex. Insira o valor em R$
Você informou R$ 100, 00.
Esse valor em Dólar é UU$ 19,24
Cotação de hoje é R$5,20
-->
<div>
    <h2>Conversor de Moedas &#x1F4B0; R$-UU$ &#x1FA99;</h2>
    <?php
        $moeda = isset($_GET["real"])?$_GET["real"]:5.00;
        $conversao = $moeda / 5.20;
        echo "<h2>O valor em Real <span>R$". number_format($moeda,2,",",".")."<br> em Dólar hoje é UU$". number_format($conversao,2,",",".")."</h2>";    
    ?>
        <a href="questao1.html"><button>Voltar</button></a>   
</div>
    
</body>
</html>
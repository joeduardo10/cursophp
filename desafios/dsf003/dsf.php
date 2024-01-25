<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <?php 
        //cotaçaõ copiada do google
        $_cotaçao = 5.17;
        //quantos Reais você tem
        $_real = $_REQUEST["din"]?? 0;
        // Equivalencia em dolar
        $_dolar = $_real / $_cotaçao;
        // mostrar o resultado
        //echo "seus R\$" . number_format($_real, 2, ",",".") . "equivalem a US\$" . number_format($_dolar, 2, ",", ".");
        // Formatação de moedas usando internacionalizaçãp
        // biblioteca intl
        $_padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($_padrao, $_real,"BRL"). " equivalem a <strong> " . numfmt_format_currency($_padrao, $_dolar, "USD"). "</strong></p>";
               
        ?>
        <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>
</body>
</html>
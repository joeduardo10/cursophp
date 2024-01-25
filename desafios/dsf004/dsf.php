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
        //cotaçaõ API do Banco Central 
        $inicio= date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y"); 

        $URL = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio.'\'&@dataFinalCotacao=\''. $fim.'\'&$top=1&$orderby=cotacaoCompra%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($URL), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        //quantos Reais você tem
        $_real = $_REQUEST["din"]?? 0;
        // Equivalencia em dolar
        $_dolar = $_real / $cotacao;
        // mostrar o resultado
        //echo "seus R\$" . number_format($_real, 2, ",",".") . "equivalem a US\$" . number_format($_dolar, 2, ",", ".");
        // Formatação de moedas usando internacionalizaçãp
        // biblioteca intl
        $_padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "<p>Seus " . numfmt_format_currency($_padrao, $_real,"BRL"). " equivalem a <strong> " . numfmt_format_currency($_padrao, $_dolar, "USD"). "</strong></p>";
        echo "cotação de $fim é de R$ $cotacao"
               
        ?>
        <button onclick="javascript:history.go(-1)">Voltar </button>
    </main>
</body>
</html>
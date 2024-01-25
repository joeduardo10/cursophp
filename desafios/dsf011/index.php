<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Elephant-icon.png" type="image/x-icon">
</head>
<body>
   <?php 
   $preco = $_REQUEST['preco']?? '0';// pega o valor do formulário
   $reaj = $_REQUEST['reaj']?? '0';
   ?>
    <main>
    <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preço">Preço do produto(R$):</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="reaj">Qual será o percentual de reajuste(<strong><span id = "p">?</span>%</strong>)</label>
            
            <input type="range" name="reaj" id="reaj" min="0" max = "100" step="1" oninput="mudaValor()" value="<?=$preco?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
    $aumento = $preco * $reaj / 100;
    $novopreco = $preco+ $aumento;
    ?>
<Section>
<h2>Resultado do Reajuste</h2>
<p>O produto que custava R$[<?=number_format($preco,2 ,",",".")?>] <strong>com  [<?=$reaj?>%] de aumento </strong> vai passar a custar <strong>R$[<?=number_format($novopreco,2,",",".")?>]</strong>a partir de agora</p>


</Section>
<script>
mudaValor(); //Declarações automáticas
   function mudaValor() {
    p.innerText =  reaj.value;
    }
</script>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP caixa eletronico</title>
    <link rel="shortcut icon" href="Elephant-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $saque = $_GET["vlr"]?? 0;
    ?>
    <main>
        <form action="<?$_SERVER['PHP_SELF'] ?>" method = "get">
            <h1>Caixa Eletronico</h1>
            <label for="vr">Informe o Valor que deseja sacar(R$):<sup>*</sup></label>
            <input type="number" name="vlr" id="vlr" min= "0" step="5" required value="<?=$saque?>">
            <p style="font-size: 0.32cm"><sup>*</sup>Notas disponiveis: R$200,00  R$100,00  R$50,00  R$ 10,00  R$5,00 </p>
            <input type="submit" value="Sacar">
        </form>
     </main>
     <section>
        <h2>saque de R$ <?=number_format($saque,2,",",".")?> Realizado</h2>
        <p>O caixa eletronico var te entregar as seguintes notas:</p>
        <?php 
            $sobra = $saque;
            //$notas_200 = (int)($sobra / 200);(força divisão a retornar só a parte inteira)
            $notas_200=intdiv($sobra,200);// intdiv()retorna a parte inteira da divisão outra maneira de fazer
            $sobra = $sobra % 200;
            $notas_100 = floor($sobra / 100);// floor arredonda para baixo retorna somente inteiro da divisão
            $sobra %= 100; // forma simplificada para ($sobra = $sobra % 100)
            $notas_50 = (int)($sobra / 50);
            $sobra  %= 50;
            $notas_20 =(int)($sobra / 20);
            $sobra  %= 20;
            $notas_10 =(int)($sobra / 10);
            $sobra %= 10;
            $notas_5 = (int)($sobra / 5);
         ?>     
<table>
<tbody>
<tr>
    <td><img src="notas/200.png" alt="Nota de 200"class="nota"> x  <?=$notas_200?></td>
    <td><img src="notas/100.png" alt="Nota de 100"class="nota"> x  <?=$notas_100?></td>
    <td><img src="notas/50.png" alt="Nota de 50"class="nota"> x  <?=$notas_50?></td>
 
</tr>
<tr>
    <td><img src="notas/20.png" alt="Nota de 20"class="nota"> x  <?=$notas_20?></td>
    <td><img src="notas/10.png" alt="Nota de 10"class="nota"> x  <?=$notas_10?></td>
    <td><img src="notas/t5.png" alt="Nota de 5"class="nota"> x  <?=$notas_5?></td>
</tr>
</tbody>
</table>
<!-- DivTable.com -->
   </section>
</body>
</html>
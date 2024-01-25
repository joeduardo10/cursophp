<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Elephant-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Salario mínimo desafio 007</title>
</head>
<body>
    <?php 
    $salminimo = 1_380.60;
    $salario = $_GET["sal"]?? $salminimo;
    ?>
    <main>
        <h1>Salario Mínimo</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
        <label for="Salario">informe o salário:</label>
        <input type="number" name="sal" id="sal" min="0" step="0.01" value= "<?=$salario?>">
        <p>considerando o salário mínimo de <strong>R$<?=number_format($salminimo,2,",",".")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
      </main>

    <section id="resultado">
        <?php 
        $sal = $salario % $salminimo;
        $salario = intdiv($salario,$salminimo);
        //echo "<p>salario mínimo vale <strong>R$$salminimo,00</strong></p>";
        echo "<p> você recebe:<strong>$salario</strong> salarios minimos e <strong>R\$".number_format($sal,2,",",".")."</strong> </p>";
        ?>
    </section>
</body>
</html>
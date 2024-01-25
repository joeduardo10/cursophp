<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Elephant-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>desafio 8 Raiz quadrada e Raiz cubica</title>
</head>
<body>
    <?php 
    $sal = 0;
    $num = $_GET["sal"]?? 0;
    ?>
    <main>
        <h1>DESAFIO 8</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="Salario">informe o salário:</label>
            <input type="number" name="sal" id="sal" min="0"  value= "<?=$num?>">
            <input type="submit" value="Calcular">
        </form>
      </main>

    <section id="resultado">
        <?php 
            $sal = sqrt($num);
            echo"O valor da raiz quadrada: $sal<br>";
            $raiz_cubica=pow($num,1.0/3.0);
            echo 'O valor do raiz cubica: ' . $raiz_cubica . "<br/>";
        ?>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 006 anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['Dividendo']?? 0;
    $divisor = $_GET['Divisor']?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="div">Dividendo</label>
            <input type="number" name="Dividendo" id="Dividendo" min="0" value= "<?=$dividendo?>">
            <label for="div">Divisor</label>
            <input type="number" name="Divisor" id="Divisor" nim ="1" value=  "<?=$divisor?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="Resultado">
        <h2>Estrutura  da  divisão</h2>
    <?php 
    //$quociente =intdiv($dividendo,$divisor); // pega a parte inteira da divisão ou
    $quociente = (int)($dividendo/$divisor);
    $resto = $dividendo % $divisor;
    ?>
    <table class ="divisao">
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$quociente?></td>
        </tr>
    </table>
    </section>
</body>
</html>
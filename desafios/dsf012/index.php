<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="shortcut icon" href="Elephant-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $tempototal = $_GET["seg"]??'1';
    ?>
    <main>
        <h1>Calculo do Tempo</h1>
        <form action="<?$_SERVER['PHP_SELF'] ?>" method="get"
     >    <label for="tempo">Informe o tempo em segundos:</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$tempototal?>"      >                                        <input type="submit" value="Calcular">
            
       </form>
    </main>
    <section>
        <h2>Resultado</h2>
    <?php 
    $total = $tempototal;
    $sobra = $total;
    // Semana
    $semanas = (int)($sobra / 604800);
    $sobra = $sobra % 604800;
    // total de dias
    $dias = (int)($sobra / 86400);
    $sobra = $sobra % 86400;
    // Total de horas
    $horas = (int)($sobra / 3600);
    $sobra = $sobra % 3600;
    // total de minutos
    $minutos = (int)($sobra / 60);
    $sobra = $sobra % 60;
    // segundos
    $segundos = $sobra % 60;

?>
    <p>Analizando o valor que você informou<strong> [<?=number_format($tempototal,0,",",".")?>] de Segundos</strong> equivalem a:</p>
 <ul>
    <li>[<?=$semanas?>] Semanas</li>
    <li>[<?=$dias?>] dias</li>
    <li>[<?=$horas?>] horas</li>
    <li>[<?=$minutos?>] Minutos</li>
    <li>[<?=$segundos?>] Segundos</li>

 </ul>

    
    </section>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhando com numeros aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatórios</h1>
        <?php 
        $_min =0;
        $_max = 100;
        $_num = mt_rand($_min, $_max);
        echo "<p>Gerando um numero aleatório entre  $_min e $_max...</p><br>o valor grerado foi <strong>$_num</strong>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F504;DE NOVO</button>
    </main>
    
</body>
</html>
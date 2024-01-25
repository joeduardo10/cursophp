<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
         $sobrenome = "Fernandes";
         $nome = "Jose Eduardo";
         const PAIS = "Brasil";
    date_default_timezone_set("America/Sao_Paulo"); // GMT -3
    echo "hoje é dia  " .date("d/M/Y");
    echo "\nHora atual é" .date("G:i:s");
    //$nome="Rafael";
    echo "\nMuito prazer ,  $sobrenome $nome você mora no" .PAIS; 


    ?>
</body>
</html>
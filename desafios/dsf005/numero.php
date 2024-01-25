<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHPt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de numero Real</h1>
        <?php 
        $num = $_POST["n"]?? 0;
        echo " <p>Analisando o numero <strong>".number_format($num,3, ",", ".") ."</strong></p>"
      ;
      $int = (int)$num;
      $fra=$num - $int;
      echo "<ul><li>A Parte inteira do numero é:<strong>".number_format($int,0,",",".")."</strong><li>";

      echo "<li>A Parte fracionaria do numero é:<strong>".number_format($fra,3,",",".")."</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>
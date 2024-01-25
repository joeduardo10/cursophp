<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
         $_nr = $_GET["numero"]?? "Sem nome";
         $_a = $_nr - 1;
         $_s = $_nr + 1;
         echo "<p> numero escolhido foi: <strong>$_nr</strong></p>";
         echo "<p>seu antecessor é: <strong>$_a</strong>  <p/>";
         echo "<p>seu sucessor é : <strong> $_s</strong> <p/>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button>
    </main>
</body>
</html>
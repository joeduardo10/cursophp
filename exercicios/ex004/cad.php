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
    //var_dump($_GET) // $_request é junção de variáveis super globais $_get, $_post, $_cookies
    $_nome = $_GET["nome"]?? "Sem nome";
    $_sobrenome = $_GET["Sobrenome"]?? "desconhecido";
    echo "<p>E um prazer te conhecer,<strong> $_nome $_sobrenome</strong> este é o meu site </p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>
</html>
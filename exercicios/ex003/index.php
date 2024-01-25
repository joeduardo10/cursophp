<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal, 0b = binário, 0 octal
        //  $num = 010;
        //  echo "O valor da variável é:  $num";
        // $v = (int)3e2; // 3x10(2) coerção
        // var_dump($v)
        // $num = (int)"950";
        // var_dump($num);
        // $casado = false; // false retorna vazio
        // print($casado);
        // var_dump($casado)
        // $vet = [2, 4, 6, 8, 12, true, 2.5, "Maria"];
        // var_dump($vet)
        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)

    ?>
</body>
</html>
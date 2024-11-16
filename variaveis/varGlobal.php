<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Escopo GLOBAL</h3>
    <?php 
        $x = 5; // escopo global
        function minhaFuncao() { // declaração de função
            // usar x dentro da função gera erro: $x é indefinida
            echo"<p>Variavel x dentro da função é: " . $x . "</p>";
        }

        minhaFuncao();
        echo "<p>Variavel x fora da funçao é: " . $x . "</p>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h3, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Escopo LOCAL</h3>
    <?php 
        function minhaFuncao() { // declaração de função
            $x = 5; // escopo LOCAL
            echo "<p>Variavel x dentro da função é: " . $x . "</p>";
        }
        minhaFuncao();
        // usar x fora da função gera erro: $x é indefinida
        echo"<p>Variavel x fora da função é: ". $x . "</p>";
    ?>
</body>
</html>
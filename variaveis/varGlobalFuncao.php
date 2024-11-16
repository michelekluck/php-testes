<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Escopo GLOBAL + palavra chave GLOBAL</h3>
    <?php 
    $x = 10; $y=20; // escopo global

    function minhaFuncao() {
        global $x, $y; // uso correto de variavel global dentro de função
        echo "<p>Soma dentro de função: x + y (globais) = " . ($x + $y) . "</p>";
    }

    minhaFuncao();
    echo "<p>Variavel x = " . $x . "</p>";
    echo "<p>Variavel y = " . $y . "</p>";
    ?>

</body>
</html>
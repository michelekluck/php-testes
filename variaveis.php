<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body { background-color: darkolivegreen; }

        p {  font-family: verdana;
             color: white;
             font-size: 16px; }
    </style>
</head>
<body>
    <?php 
    // variavel x recebe uma string
    $x = "Linguagem PHP";

    // o ponto . concatena Strings 
    echo "<p>A " . $x . " é show!</p>";

    // variável x recebe a raiz quadrada de 144
    $x = sqrt(144);
    echo "<p>Raiz quadrada de 144 = ". $x ."</p>";

    // variável aux recebe um valor boleano
    $aux = (5 * 4 > 36);
    if ($aux == true)
        echo "<p>(5 * 4 > 36) = Verdade </p>";
    else 
        echo "<p>(5 * 4 > 36) = Falso </p>"
    ?>
</body>
</html>
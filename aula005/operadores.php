<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <link rel="stylesheet" href="_css/estilo.css">

    <style>
        h1{
            color: yellow;
            font: 30pt lucida console;
            }
    </style>
</head>
<body>
<h1>Operadores Aritméticos</h1>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valore recebidos: $n1 e $n2</h2>";
        echo "<br/>A soma vale ". ($n1 + $n2);
        echo "<br/>A subtração vale ". ($n1 - $n2);
        echo "<br/>A multiplicação vale ". ($n1 * $n2);
        echo "<br/> A divisão vale ". ($n1 / $n2);
        echo "<br/>O módulo vale ". ($n1 % $n2);
        echo "<br/>A media vale ". (($n1 + $n2) / 2)
    ?>
</div>
</body>
</html>
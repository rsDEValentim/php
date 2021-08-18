<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
    <style>
        h2{
            font: 15pt Arial;
            color: #FF0000;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Funções Aritméticas</h1>
    <?php
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo"<h2>Valores recebidos: $v1 e $v2</h2>";
        echo "O valor absoluto de $v2 e ". abs($v2);
        echo "</br>O valor de $v1 <sup>$v2</sup> é ". pow($v1, $v2);
        echo "</br> a raiz de $v1 é ". sqrt($v1);
        echo "</br> O valor de $v2 arredondado é ". round($v2);
        echo "</br> O valor de $v2 arredondado para cima é ". ceil($v2);
        echo "</br> O valor de $v2 arredondado para baixo é ". floor($v2);
        echo "</br> A parte inteira de $v2 é ". intval($v2);
        echo "</br> O valor de $v1 em moeda é R$ " . number_format($v1, 2, ",", "."); 
    
    ?>

</body>
</html>
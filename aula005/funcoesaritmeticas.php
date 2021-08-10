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
    
    ?>

</body>
</html>
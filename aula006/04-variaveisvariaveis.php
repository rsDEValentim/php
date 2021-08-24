<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04-variaveisvariaveis</title>
</head>
<body>
<div>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é <strong>$x</strong>";
        echo "</br> A variável ABC criada recebeu o valor de <strong>$abc</strong>";
    ?>

</div>
</body>
</html>
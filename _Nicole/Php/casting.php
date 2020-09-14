<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>
<body>

<?php 
    //gettype()  => retorna o tipo da variavel

    $valor = 10.56;
    //$valor_2 = (float) $valor;   //float, double, real
    $valor_2 = (int) $valor;


    echo $valor . ' ' . gettype($valor);
    echo '<br>';
    echo $valor_2 . ' ' . gettype($valor_2);


?>
    
</body>
</html>
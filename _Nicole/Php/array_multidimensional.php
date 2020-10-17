<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional</title>
</head>

<body>

    <?php
    $lista_coisas = [];

    $lista_coisas['frutas'] = [1 =>'Banana', 2 => 'Maca', 3 => 'Morango', 4 => 'Uva'];
    $lista_coisas['pessoas'] = [1 => 'Joao',  2 =>'Maria', 3 => 'Aline', 4 => 'Matheus'];


    echo '<pre>';
    print_r($lista_coisas);

    echo '<hr>';

    echo '<pre>';
    print_r($lista_coisas['frutas'][3]);


    ?>


</body>

</html>
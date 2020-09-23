<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array basico</title>
</head>

<body>

    <?php

    //arrays sequenciais
    // $lista_frutas = array('Banana', 'Maca', 'Morango', 'Uva');  //tambem pode ser usado []
    // $lista_frutas[] = 'Abacaxi';

    // echo '<pre>';
    // var_dump($lista_frutas);
    // echo '<pre>';
    // echo '<hr>';
    // print_r($lista_frutas);
    //echo $lista_frutas[0];

    //associativos

    $lista_frutas = [
        'a' => 'Banana',
        'b' => 'Maca',
        'c' => 'Morango',
        'd' => 'Uva'
    ];


    $lista_frutas['e'] = 'Abacaxi';

     echo '<pre>';
     var_dump($lista_frutas);

     echo $lista_frutas['e'];


    ?>


</body>

</html>
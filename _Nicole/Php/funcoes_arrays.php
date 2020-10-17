<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes arrays</title>
</head>

<body>

    <?php

    // $array = 'String';
    // $retorno = is_array($array);

    // if ($retorno) {
    //     echo 'Sim, é um array';
    // } else {
    //     echo 'Nao é um array';
    // }

    //     $array = [1 => 'a', 2 => 'b', 3 => 'c'];

    //     echo '<pre>';
    //    print_r($array);

    //    echo '<br>';

    //    $chaves_array = array_keys($array);

    //    echo '<pre>';
    //    print_r($chaves_array);


    // $array = ['teclado', 'Mouse', 'Notebook'];  //muda os indices tambem

    // echo '<pre>';
    // print_r($array);

    // echo '<br>';

    // sort($array);

    // echo '<pre>';
    // print_r($array);

    // echo '<br>';



    // $array = ['teclado', 'Mouse', 'Notebook'];  //mantem os indices 

    // echo '<pre>';
    // print_r($array);

    // echo '<br>';

    // asort($array);

    // echo '<pre>';
    // print_r($array);

    // echo '<br>';


    // $array = ['teclado', 'Mouse', 'Notebook'];  //muda os indices tambem

    // echo '<pre>';
    // print_r($array);
    // echo count($array);

    // echo '<pre>';

    // $array1 = ['osx', 'windows'];
    // $array2 = ['Linux'];
    // $array3 = ['solaris'];

    // $novo_array = array_merge($array1, $array2, $array3);




    // echo '<pre>';
    //  print_r($novo_array);
  

    // $string = '26/04/2018';
    // $array_retorno = explode('/', $string);

    // echo '<pre>';
    // print_r($array_retorno);
    // echo $array_retorno[2] . '/' . $array_retorno[1] . '/' . $array_retorno[0];




    $array = ['a', 'b', 'c', 'd'];
    $string_retorno = implode(',', $array);
    
    echo '<pre>';
    print_r($string_retorno);

    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array pesquisa</title>
</head>

<body>

    <?php

    //in_array = true or false  (1 - texto vazio)
    //array_search() = retorna o indice do valor pesquisado caso ele exista
     
     $lista_frutas = ['Banana', 'Maca', 'Morango', 'Uva'];

    //  echo '<pre>';
    //  print_r($lista_frutas);

     
    //  $existe = in_array('Maca', $lista_frutas);

    //  echo array_search('Abacaxi', $lista_frutas);

     //null = texto vazio

    //  if($existe) {
    //      echo 'Sim, o valor pesquisado existe no array';
    //  } else {
    //      echo 'Nao, o valor pesquisado nao existe no array';
    //  }

    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['Joao','Maria']
    ];

    echo '<pre>';
    print_r($lista_coisas);

    echo in_array('Uva', $lista_coisas['frutas']);


    ?>


</body>

</html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    // NOTE is_array -> verifica se o parâmetro passado é um array(true/false)
    
    /*  $array = array('notebook', 'teclado');
    $retorno = is_array($array);

    if($retorno){
        echo 'Sim, é um array';
    } else {
        echo 'Não, é um array';
    } */

    // NOTE array_keys -> retorna todas as chaves (indices) de um array, armazenando em um novo array
    
    /*  $array = [1 => 'a', 2 => 'b', 18 => 'c'];
    
    echo '<pre>';
        print_r($array);
    echo '</pre>';
    
    $chaves_array = array_keys($array);
    echo '<pre>';
    print_r($chaves_array);
    echo '</pre>'; */

    // NOTE sort -> ela ordena o nosso array e reajusta o indice
    
    /* $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    sort($array); //true ou false

    echo '<pre>';
        print_r($array);
    echo '</pre>'; */

    // NOTE asort -> função análoga a sort, ordena um array preservando os indices
    
    /* $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    asort($array); //true ou false

    echo '<pre>';
        print_r($array);
    echo '</pre>'; */

    // NOTE count -> retorna um inteiro com a quantidade de elementos
    
    /*  $array = array('notebook', 'teclado', 'mouse', 'cabo hdmi', 'gabinete');

    echo '<pre>';
        print_r($array);
        echo count($array);
    echo '</pre>'; */

    // NOTE merge -> ela permite fundir vários arrays em um só
    
    /* $array1 = ['osx', 'windows'];
    $array2 = array('linux');
    $array3 = ['solaris'];

    $novo_array = array_merge($array1, $array2, $array3);
    echo '<pre>';
    print_r($novo_array);
    echo '</pre>'; */

    // NOTE explode -> Divide uma string baseada em um delimitador
    
    /* $string = '26/04/2018';
    $array_retorno = explode('/', $string);
    echo '<pre>';
        echo $string;
        print_r($array_retorno);
        echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
    echo '</pre>'; */

    // NOTE implode -> junta os elementos de um array em uma string
    
    $array = ['Pedro', 'Henrique', 'De', 'Lima'];
    $string_retorno = implode(' ', $array);
    echo $string_retorno;

    /* NOTE teste sobre explode 

    $nome = 'pedro henrique de lima';
    $retorno = explode(' ', $nome);
    echo '<pre>';
        echo $nome;
        echo '<hr>';
        print_r($retorno);
    echo '</pre>';

    */
        
    ?>


</body>

</html>
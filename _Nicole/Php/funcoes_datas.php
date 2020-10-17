<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes para datas</title>
</head>

<body>

    <?php

    //recuperacao da data atual
    //  echo date('d/m/Y H:i');

    //  echo '<br>';
    //  echo date_default_timezone_get();
    //  echo date_default_timezone_set('America/Sao_Paulo');
    //  echo '<br>';
    //  echo date('d/m/Y H:i');


    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    //timestamp

    $time_inicial = strtotime($data_inicial);
    echo $data_inicial . '- ' . $time_inicial;
    echo '<br>';
    $time_final = strtotime($data_final);
    echo $data_final . '- ' . $time_final;

    echo '<br>';
    //$diferenca_times = $time_final-$time_inicial;   //data maior a esquerda
    echo $diferenca_times = abs($time_inicial - $time_final);
    
    echo '<br>';

    $segundos_existem_dia = 24 * 60 * 60;

    echo 'Um dia possui ' . $segundos_existem_dia . 'segundos';

    echo '<br>';

    echo 'A diferenca de dias é: ' . $diferenca_times / $segundos_existem_dia;

    ?>


</body>

</html>
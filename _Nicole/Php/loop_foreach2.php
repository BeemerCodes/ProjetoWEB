<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop foreach 2</title>
</head>

<body>

    <?php

    $funcionarios = [
        ['nome' =>'Joao', 'salario' => 2500, 'data_nascimento' => '06/03/1980'],
        ['nome' =>'Maria', 'salario' => 3000],
        ['nome' =>'Julia', 'salario' => 2200],
    ];

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

    foreach ($funcionarios as $funcionario) {   //usando o token para pegar o indice
        foreach ($funcionario as $idx => $valor) {
        echo "$idx - $valor <br>";
    }
    echo '<hr>';
    }



    ?>


</body>

</html>
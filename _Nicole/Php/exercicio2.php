<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcoes matematicas</title>
</head>

<body>

    <?php

 $numeros = [];

 while (count($numeros) <= 5) {  //conta se os elementos sao menor que 6
     $num = rand(1, 60);              //variavel para salvar um numero aleatorio

    if(!in_array($num, $numeros)) {    //verifica se o numero gerado esta no array
        $numeros[] = $num;            // se nao estiver adiciona o numero ao array
    }
 }

 print_r($numeros);
    

    ?>


</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcoes strings</title>
</head>

<body>

    <?php

    $texto = 'Curso completo de php';


     //string to lower
     echo strtolower($texto);

     //string to upper
     echo '<br>';
     echo strtoupper($texto);

     //uppercase first
     echo '<br>';
     echo ucfirst($texto);

    //string length
     echo '<br>';
     echo strlen($texto);

    //string replace
     echo '<br>';
     echo str_replace('php', 'JavaScript', $texto);

    //
     echo '<br>';
     echo substr($texto, 0, 6). '...';

    ?>


</body>

</html>
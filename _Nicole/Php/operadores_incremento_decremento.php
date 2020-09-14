<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else operadores condicionais</title>
</head>
<body>

  <h3>Pos-incremento</h3>

    <?php 
 
    $a = 7;

    echo "O valor contido em a é: $a <br>";
    echo 'O valor contido em a pos-incremento é:'. $a++ .'<br>';
    echo "O valor atualizado é: $a";
    ?>

    <h3>Pré-incremento</h3>
    <?php
     
    $a = 10;

    echo "O valor contido em a é: $a <br>";
    echo 'O valor contido em a pre-incremento é:'. ++$a .'<br>';
    ?>

</body>
</html>
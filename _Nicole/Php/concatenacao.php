<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenacao</title>
</head>
<body>


    <?php 
    
    $nome = 'Nicole';
    $cor = 'preto';
    $idade = 22;
    $atividade_preferida = 'ouvir musica';

//operador .

  echo 'Ola ' .$nome. ' , vi que sua cor preferida é ' . $cor . ' estou vendo que voce possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;
  

//aspas duplas

  echo '<br>';

  echo "OLa $nome, vi que sua cor preferida é $cor, estou vendo que voce possui $idade anos e que gosta de $atividade_preferida";
    ?>

</body>
</html>
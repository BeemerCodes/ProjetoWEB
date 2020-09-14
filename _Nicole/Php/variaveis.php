<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>


    <?php 
        
      //string
      $nome = 'Nicole Ruivo';
      
      //int
      $idade = 22;

      //float
      $peso = 67.2;  

      //boolean
      $fumante = true; // false = vazio // true = 1
    
     //alterando valores de variaveis
      $idade = 23;
    ?>

         <h1>Ficha cadastral</h1>
         <br>
         <p>Nome: <?= $nome?></p>
         <p>Idade: <?= $idade?></p>
         <p>Peso: <?= $peso?></p>
         <p>Fumante: <?= $fumante?></p>
</body>
</html>
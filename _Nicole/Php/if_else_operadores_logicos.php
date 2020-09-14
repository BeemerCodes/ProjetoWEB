<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else operadores logicos</title>
</head>
<body>



    <?php 

    //&& -> todas as expressoes precisam ser verdadeiras
    //|| -> ao menos uma das expressoes precisa ser verdadeira
    //XOR ->retorna verdadeiro se uma das expressoes for verdadeira e a outra falsa
    // ! -> inverte o resultado retornado pela expresssao



      if(!(5 == 3 XOR 10 > 3)) {
         echo 'Verdadeiro';
      }else {
        echo 'Falso';
      }
  
    ?>

</body>
</html>
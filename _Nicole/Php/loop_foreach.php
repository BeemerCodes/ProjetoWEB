<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop foreach</title>
</head>

<body>

    <?php
     
     $itens = ['Sofa', 'Mesa', 'Cadeira', 'Fogao', 'Geladeira'];

     echo '<pre>';
     print_r($itens);
     echo '</pre>';

     foreach($itens as $item) {
         echo "$item";

         if($item == 'Mesa') {
             echo ' (*Compre uma mesa e ganhei 25% em uma cadeira)';
         }

         echo '<br>';
     }


    ?>


</body>

</html>
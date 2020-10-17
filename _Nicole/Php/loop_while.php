<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop while</title>
</head>

<body>

    <?php
    
    $num = 0;
    //operadores comparacao / logicos
    while($num < 50) {

        $num += 5;

        if($num == 10 || $num == 20) {
            continue;
        }
    
     echo "$num <br>";

     

    //  if($num > 100) {
    //  break;
    //  }

    }

    
 
    ?>


</body>

</html>
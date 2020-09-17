<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    /*$x = 1;
    do {
        echo "X = $x <br />";
        $x++; //critério de parada
        //continue
        //break
    } while($x < 9);*/

    // echo '<br />';

    // while($x < 9 ) {
    //     echo 'Entrou no while';
    // }

        $num = 0;

        echo '--- INICIO DO TESTE ---<br>';

        do {

            if($num != 10) {
                echo 'Numero: ', $num,'<br>';
                $num++;

            } else {
                break;

            }
            
        } while($num);

        echo '--- FIM DO TESTE ---'

    ?>
</body>

</html>
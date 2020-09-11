<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    /* 
    $x = 1;
    while ($x < 10){

    }

    do {

    }while($x <10);
    */

    // for($x = 1; $x <= 10; $x++){
    //     echo "$x <br/>";
    // }

    // for ($x = 11; true; $x++) {

    //     if ($x >= 20) {
    //         break;
    //     }
    //     echo "$x <br/>";
    // }

    // for ($x = 10; true; $x--) { FIXME nesse caso o teste é feito por if, e no caso a baixo pelo próprio for 
    //                             FIXME por isso deve se atendar ao (== 0, > 0) pois no if o teste é se é igual a zero
    //                             FIXME ja no for é se é maior que zero assim satisfazendo o loop 
    //     if ($x == 0) {
    //         break;
    //     }
    //     echo "$x <br/>";
    // }

    /*
    for ($x = 10; $x > 0; $x--) {

        //break
        //continue
        echo "$x <br/>";
    }
    */


    // SECTION padrão de loop for caso eu esqueça: 

        /* --> REVIEW <--

    // TODO ler o código do professor, coisas uteis la são boas para relembrar 
          
            for(variavel; condição; incremento) {
               teste lógico;
            }
          
         */


    $num = 0;  # NOTE Meu teste para relembrar e treinar

    for($num; $num <= 10; $num++) {
        echo $num, '<br>';
    }


    ?>
</body>

</html>
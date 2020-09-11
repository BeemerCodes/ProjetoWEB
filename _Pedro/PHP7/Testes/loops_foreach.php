<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $nomes = ['Pedro', 'Bia', 'José', 'Fernando', 'Oscar'];

    foreach($nomes as $nome) {
        echo "$nome <br>";
    }




    /*
    $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    foreach ($itens as $item) {
        echo "$item ";
        if ($item == 'mesa') {
            echo "(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)";

        }
        echo '<br />';
    }
    */

    ?>
</body>

</html>
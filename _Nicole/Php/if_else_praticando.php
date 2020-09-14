<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else operadores logicos</title>
</head>

<body>

    <?php

    $usuario_possui_cartao_loja = true;
    $valor_compra = 350;

    $valor_frete = 50;

    $recebeu_desconto_frete = true;

    $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : $usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : $usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete;

    $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;
    
    $valor_frete = $valor_frete_aux;
/*
    if ($usuario_possui_cartao_loja && $valor_compra >= 400) {
        $valor_frete = 0;
    }else if($usuario_possui_cartao_loja && $valor_compra >= 300) {
        $valor_frete = 10;
    } else if($usuario_possui_cartao_loja && $valor_compra >= 100) {
        $valor_frete = 25;
    } else {
        $recebeu_desconto_frete = false;
    }
*/
    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui o cartao da loja?
    <?=$recebeu_desconto_frete ? 'Sim' : 'Nao';?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?</p>
    <?php
    if ($recebeu_desconto_frete) {
        echo 'Sim';
    } else {
        echo 'Nao';
    }
    ?>
    <p>Valor do frete: <?= $valor_frete ?></p>

</body>

</html>
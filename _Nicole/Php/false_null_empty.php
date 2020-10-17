<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, null, empty</title>
</head>

<body>


    <?php

//false (true/false) - tipo variavel boolean
//null e empty - valores especiais

$funcionario1 = null;
$funcionario2 = '';
$funcionario3 = false;

//valores null
if(is_null($funcionario1)) {
    echo 'Sim, a variavel é null';
} else {
     echo 'Nao, a variavel nao é null';
}

echo '<br>';

if(is_null($funcionario2)) {
    echo 'Sim, a variavel é null';
} else {
     echo 'Nao, a variavel nao é null';
}


echo '<br>';

//valores empty
if(empty($funcionario2)) {
    echo 'Sim, a variavel esta vazia';
} else {
     echo 'Nao, a variavel nao esta vazia';
}

echo '<br>';

if(empty($funcionario1)) {   //null é considerado vazio
    echo 'Sim, a variavel esta vazia';
} else {
     echo 'Nao, a variavel nao esta vazia';
}
echo '<br>';

if(empty($funcionario3)) {     //false é considerado vazio 
    echo 'Sim, a variavel esta vazia';
} else {
     echo 'Nao, a variavel nao esta vazia';
}

    ?>


</body>

</html>
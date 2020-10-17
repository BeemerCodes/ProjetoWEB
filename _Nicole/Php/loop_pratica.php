<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop for</title>
</head>

<body>

    <?php

$registros = [
    array('titulo' => 'titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'),
    array('titulo' => 'titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'),
    array('titulo' => 'titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'),
    array('titulo' => 'titulo noticia 4', 'conteudo' => 'Conteudo noticia 4'),
];


//$idx = 0;

echo 'O array possui ' . count($registros) . ' registros';
echo '<br>';

// while($idx < count($registros)) {  //count praa que seja possivel visualizar os arrays de forma dinamica

//  echo '<h3>' .($registros[$idx]['titulo']) . '</h3>';
//  echo '<p>' . ($registros[$idx]['conteudo']) . '</p>';

//  echo '<hr>';

//  $idx++;

//}


// do {

//   echo '<h3>' .($registros[$idx]['titulo']) . '</h3>';
//   echo '<p>' . ($registros[$idx]['conteudo']) . '</p>';

//   echo '<hr>';

//  $idx++;


// } while($idx < count($registros))


for($idx = 0; $idx < count($registros); $idx++) {

 echo '<h3>' .($registros[$idx]['titulo']) . '</h3>';
 echo '<p>' . ($registros[$idx]['conteudo']) . '</p>';

 echo '<hr>';
}

    ?>


</body>

</html>

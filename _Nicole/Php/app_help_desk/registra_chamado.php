<?php

 session_start();

//estamos trabalhando a montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria =str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_SESSION['id']. '#' .$titulo .'#' . $categoria . '#' . $descricao . PHP_EOL;


//abrindo o arquivo, escrevendo e fechando.
$arquivo = fopen('/opt/lampp/app_help_desk/arquivo.txt', 'a');

fwrite($arquivo, $texto);

fclose($arquivo);

header('Location: abrir_chamado.php');

?>
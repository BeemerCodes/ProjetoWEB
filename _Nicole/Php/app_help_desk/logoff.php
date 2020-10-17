<?php


session_start();


//remover indices do array de sessao
//unset()

//destruir a variavel de sessao
//session_destroy()

//print_r($_SESSION);



//quando cliclado em sair passa por logoff destruindo a variavel 
//sendo assim necessario fazer o login novamente para poder acessar os outros scripts

session_destroy();
header('Location: index.php');
?>
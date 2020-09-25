<?php

session_start();



//variavel que verifica se a autenticacao foi realizada

$usuario_autenticado = false;
$usuario_id = null;

$valida_perfis = [1 => 'administrativo', 2 => 'usuario'];
$usuario_perfil_id = null;

//usuarios do sistema
$usuarios_app = [
    array('ID' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'id_perfil' => 1),
    array('ID' => 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'id_perfil' => 1),
    array('ID' => 3, 'email' => 'joao@teste.com.br', 'senha' => 'abcd', 'id_perfil' => 2),
    array('ID' => 4, 'email' => 'maria@teste.com.br', 'senha' => 'abcd', 'id_perfil' => 2)

];

// echo '<pre>';
// print_r($usuarios_app);

//recupera usuarios cadastrados em usuarios_app, percorre um a um e faz a comparacao de senha
//se as informacoes forem compatives usuario_autenticado retorna true
foreach($usuarios_app as $user){

  if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
     $usuario_autenticado = true;
     $user['id'] = $usuario_id;
     $usuario_perfil_id = $user['perfil id'];
  }
}

//cria as variaveis de sessao que controlam o acesso a paginas restritas
if ($usuario_autenticado) {
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');  //forca o redirecionamento para a pagina descrita
}


// print_r($_POST);
// echo '<br>';
// echo $_POST['email'];
// echo '<br>';
// echo $_POST['senha'];








?>
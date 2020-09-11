<?php

  session_start();

    session_destroy();
    header('Location: index.php');


  // remover indices do array de sessão   REVIEW
      // unset($_SESSION['autenticado']); NOTE remove indices de qualquer array (apenas se existir, n retorna erros) 

  // destruir a variavel de sessão REVIEW
      // session_destroy(); NOTE destrói todos os indices dentro da global session (estarão disponíveis  ate a  proxima requisição )

?>
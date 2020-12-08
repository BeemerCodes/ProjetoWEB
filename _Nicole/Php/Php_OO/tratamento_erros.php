<?php

try {
    //tenha uma logica onde possa ocorrer um potencial erro
    echo '<h3>Try</h3>';

    $sql = 'Select from * from clientes';
   // mysql_query($sql);    //erro

   //lancando uma excecao caso o arquivo nao exista
   if (!file_exists('require_arquivo_a.php')) {
       throw new Error('O arquivo em questao deveria estar disponivel as '. date('d/m/Y H:i:s') . ' mas nao estava. Vamos seguir mesmo assim!');
   };

} catch (Error $e) {      //capturando erro e tratando
    echo '<h3>Catch</h3>';
    //echo $e;

} catch (Exception $e) {
    echo '<h3>Catch Excecao</h3>';
    echo '<p style="color: red">' . $e . '<p>';
    
} finally {
    echo '<h3>Finally</h3>';      //finalizando (pode ser catch ou finally)
}


?>
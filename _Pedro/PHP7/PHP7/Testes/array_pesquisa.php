<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Babel  -->
  <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

  <script type="text/babel">



  </script>

  <title>Padrão PHP7 com Bootstrap e ES6</title>
  <link rel="shortcut icon" href="php.svg">

</head>

<body>

  <!-- SECTION Inicio PHP -->

  <?php

    $lista_frutas = ['banana', 'maça', 'uva', 'morango'];

    // $existe =  in_array('morango', $lista_frutas); // REVIEW retorna true ou false para existência do que esta sendo procurado


    /*
    if($existe) { # NOTE o valor retornado é true ou false por isso não necessita teste, ($existe == true)
      echo 'O valor pesquisado existe';
    
    }else {
      echo 'O valor pesquisado não existe!';
    }
    */

    $lista_coisas = [
      'frutas' => $lista_frutas,
      'pessoas' => ['Pedro', 'Bia']
    ];

    echo '<pre>';
      print_r($lista_coisas);
    echo '</pre>';

    $existe = array_search('Bia', $lista_coisas['pessoas']); // REVIEW retorna o indice do valor pesquisado caso ele exista, retorna o valor do indice que o valor pesquisado se encontra, caso não exista retorna null


    if ($existe != null) {
      echo 'O valor pesquisado existe';

    }else {
      echo 'O valor pesquisado não existe!';
    }
    
  ?>

  <!-- Fim PHP -->

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <script src="js/bootstrap.min.js"></script>

</body>

</html>
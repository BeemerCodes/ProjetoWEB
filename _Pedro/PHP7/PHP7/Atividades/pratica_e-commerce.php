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

<body class="bg-secondary">

  <!-- SECTION Inicio PHP -->

  <?php

  $nome = 'Pedro';
  $valor_final = 800;
  $cartao = true;

  echo "<h2 class='display-4 text-capitalize text-white text-center'>Bem Vindo Ao E-commerce, $nome</h2>";

  if ($valor_final >= 200 && $cartao) { // NOTE $cartao não precisa ser colocado $cartao == true, pois ele ja retorna true

    $valor_final = $valor_final - (50 / 100) * $valor_final;

    echo " <h3 class='display-5'> $nome Você tem 50% de desconto, Total de: $valor_final</h3> ";
  } else if ($valor_final >= 200) {

    $valor_final = $valor_final - (10 / 100) * $valor_final;

    echo " <h3 class='display-5'> $nome Você tem 10% de desconto, Total de: $valor_final</h3> ";
  } else if ($cartao === true) {

    $valor_final = $valor_final - (30 / 100) * $valor_final;

    echo " <h3 class='display-5'> $nome Você tem 30% de desconto, Total de: $valor_final </h3>";
  } else {
    echo "<h3 class='display-5'>Não a descontos para hoje, Total de, Total de: $valor_final</h3> ";
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
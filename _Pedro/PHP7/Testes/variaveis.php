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

  // string
  $nome = 'Pedro';

  # int
  $idade = 20;

  // float
  $peso = 60.5;

  # boolean
  $fumante = false; // REVIEW true = 1, false = vazio


  ?>

  <!-- Fim PHP -->


  <h1>Ficha De Cadastro</h1>
  <br>
  <p>Nome: <?= $nome ?> </p>
  <p>Idade: <?= $idade ?> </p>
  <p>Peso: <?= $peso ?> </p>
  <p>Fumante: <?= $fumante ?> </p>

  <!-- Optional JavaScript -->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <script src="js/bootstrap.min.js"></script>

</body>

</html>
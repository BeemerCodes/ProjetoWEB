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

  
    function calcularImposto($salario) {
      echo '---Calculo De Imposto---';
      echo '<br>';

      $imposto = 0;

      if($salario <= 1903.98) {
        $imposto = 'Isento';

      }else if($salario >= 1903.99 && $salario <= 2826.65) {
        $imposto = ($salario * 7.5) / 100;

    } else if($salario >= 2826.66 && $salario <= 3751.05) {
      $imposto = ($salario * 15) / 100;

    }else if($salario >= 3751.06 && $salario <= 4644.68) {
      $imposto = ($salario * 22.5) / 100;

    }else{
      $imposto = ($salario * 27.5) / 100;

    }
  
    return $imposto;
  }

    echo "O valor do seu imposto é: ".calcularImposto(5000)

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
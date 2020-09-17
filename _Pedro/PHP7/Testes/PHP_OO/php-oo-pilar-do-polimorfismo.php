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

  class Veiculo
  {

    public $placa = null;
    public $cor = null;

      function acelerar() {

        echo 'Acelerou';


      }

      function freiar() {

        echo 'Freiou';


      }

      function trocarMarcha() {

        echo 'Desengatar Embreagem com pé e trocar marcha com a mão';


      }
  }

  class Carro extends Veiculo
  {

    function __construct($placa, $cor)
    {

      $this->placa = $placa;
      $this->cor = $cor;
    }

    public $teto_solar = true;

    function abrirTetoSolar()
    {
      echo 'Abriu o teto';
    }

    function alterarPosicaoVolante()
    {
      echo 'Virou o volante';
    }
  }


  class Moto extends Veiculo
  {

    function __construct($placa, $cor)
    {

      $this->placa = $placa;
      $this->cor = $cor;
    }

    public $amortecedor_guidao = true;

    function empinar() {

      echo 'Empinou';


    }

    function trocarMarcha() {

      echo 'Desengatar Embreagem com a mão e engatar marcha com o pé';


    }
  }


  $carro = new Carro('ABC1234', 'Vermelho');
  $moto = new Moto('ETT2345', 'Preto');

  echo $carro->trocarMarcha().'<br>';
  echo $moto->trocarMarcha();

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
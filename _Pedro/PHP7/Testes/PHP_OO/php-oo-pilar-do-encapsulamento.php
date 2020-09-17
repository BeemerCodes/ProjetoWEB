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

    class Pai {
      private $nome = 'Jorge'; //disponível para o próprio obj(class)
      protected $sobrenome = 'Silva'; //disponível para o próprio obj(class)
      public $humor = 'Feliz';


      // public function getNome(){
      //     //somente com métodos que acesso os atributos private e protected
      //     return $this->nome;
      // }
      // public function getSobrenome()
      // {
      //     //somente com métodos que acesso os atributos private e protected
      //     return $this->sobrenome;
      // }

      // public function setNome($value)
      // {
      //     $this->nome = $value;
      // }

      // public function setSobrenome($value)
      // {
      //     if (strlen($value) >= 3) {
      //         $this->sobrenome = $value;
      //     }
      // }

      public function __get($atr)
      {
        return $this->$atr;
      }
      public function __set($atr, $value)
      {
        $this->$atr = $value;
      }

      private function executarMania()
      {
        echo 'Assobiar';
      }

      protected function responder()
      {
        echo 'Oi';
      }

      public function executarAcao()
      {
        $x = rand(1, 10);

        if ($x >= 1 && $x <= 8) {
          $this->executarMania();
        } else {
          $this->responder();
        }
      }
    }
    class Filho extends Pai
    {

      public function __construct()
      {
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
      }

      private function executarMania()
      {
        echo 'Cantar';
      }

      public function x()
      {
        $this->executarMania();
      }

      protected function responder()
      {
        echo 'Olá';
      }


      /*   public function getAtributo ($attr) {
              return $this->$attr;
          }

          public function setAtributo ($attr, $value) {
              $this->$attr = $value;
          } */

      /*  public function __get($atr) {
              return $this->$atr;
          }
          public function __set($atr, $value) {
            $this->$atr = $value;
          } */
    }

    $filho = new Filho();
    //$pai = new Pai();


    echo '<pre>';
    print_r($filho);
    echo '</pre>';

    /* echo $filho->getAtributo('nome');
      echo '<br />';
      $filho->setAtributo('nome', 'Pereira');
      echo '<pre>';
      print_r($filho);
      echo '</pre>';
      echo '<br />';
      echo $filho->getAtributo('nome'); */

    //exibir os métodos do objeto
    // echo '<pre>';
    // print_r(get_class_methods($filho));
    // echo '</pre>';

    /*  echo $filho->__get('nome');

      $filho->__set('nome', 'Jamilton');
      echo '<br />';
      echo $filho->__get('nome');

      echo '<pre>';
      print_r($filho);
      echo '</pre>'; */

    $fiho->executarMania();
    echo '<br/>';
  $filho->x();

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
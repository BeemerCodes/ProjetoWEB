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

     class Funcionario { # NOTE modelo

        public $nome = null;
        public $telefone = null; # NOTE atributos
        public $numFilhos = null;

        // NOTE setters

        function setNome($nome) {
          $this->nome = $nome;
        }

        function setTelefone($telefone) {
          $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos) {
          $this->numFilhos = $numFilhos;
        }

        # NOTE getters

        function getNome() {
          return $this->nome;
        }

        function getTelefone() {
          return $this->telefone;
        }

        function getNumFilhos() {
          return $this->numFilhos;
        }

        // REVIEW getters e setters overloading / sobrecarregar

        function __set($atributo, $valor) {
          $this->$atributo;
        }

        function __get($atributo) {
          return $this->$atributo;
        }

                                        # NOTE métodos
        /*function resumirCadFunc() {
          return;
        }

        function modificaNumFilhos($numFilhos) {
          $this->numFilhos = $numFilhos; # REVIEW variavel do objeto <-, variavel do método ->
        }*/


     };

     $funcionario = new Funcionario();

     $funcionario->setNome('Pedro');
     $funcionario->setTelefone('(15)996514556');
     $funcionario->setNumFilhos('0');

     echo $funcionario->getNome() . ' possui '. $funcionario->getNumFilhos() . ' filhos, Telefone: ' . $funcionario->getTelefone();


      $funcionario2 = new Funcionario();

      $funcionario2->setNome('Nice');
      $funcionario2->setTelefone('(15)996153416');
      $funcionario2->setNumFilhos('2');

      echo '<hr>';
      echo $funcionario2->getNome() . ' possui ' . $funcionario2->getNumFilhos() . ' filhos, Telefone: ' . $funcionario2->getTelefone();


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
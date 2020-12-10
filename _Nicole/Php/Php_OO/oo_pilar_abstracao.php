<?php 
   
  //modelo

  class Funcionario {
   // atributos
     public $nome = null;
     public $telefone = null;
     public $numFilhos = null;
     public $cargo = null;
     public $salario = null; 


    //getters e setters overloading / sobrecarga
    function  __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    function __get($atributo) {
      return $this->$atributo;
    }


     //getters e setters 
/*
      function setNome($nome) {
          $this->nome = $nome;
      }

      function setNumFilhos($numFilhos) {
         $this->numFilhos = $numFilhos;
      }

      function setTelefone($telefone) {
        $this->telefone = $telefone;
      }

      function getNome() {
         return $this->nome;
      }

      function getNumFilhos() {
        return $this->numFilhos;
     }

     function getTelefone() {
       return $this->telefone;
     }

    */

   //metodos

   function resumirCadFunc() {
       return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filho(s) e telefone de numero: ' . $this->__get('telefone');
   }

   function modificarNumFilhos($numFilhos) {
      //afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
   }

  }


  $y = new Funcionario();
  $y->__set('nome', 'Jose');
  $y->__set('numFilhos', 2);
  $y->__set('telefone', '888-4444-666');
  echo $y->resumirCadFunc();
  //echo $y-> __get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) e telefone de numero ' . $y->__get('telefone')
?>
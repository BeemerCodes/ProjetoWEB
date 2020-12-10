<?php

class Pai {
    private $nome = 'Nicole';
    protected $sobrenome = 'Ruivo';
    public $humor = 'Feliz';


    //permite utilizar a sintax de atributos privados da mesma forma que publicos
    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $valor) {
        $this->$attr = $valor;
    }

/*
    //metodo publico retornando um atributo privado
    public function getSobrenome() {
       return $this->sobrenome;
    }

    public function setSobrenome($value) {

        if(strlen($value) >= 3) {
        $this->sobrenome = $value;
        }
    }
*/
    private function executarMania() {
        echo 'Assobiar';
    }

    protected function responder() {
        echo 'Oi';
    }
    
    //o metodo publico faz a interface entre a aplicacao e o objeto
    public function executarAcao() {
    $x = rand(1, 10);

      if($x >= 1 && $x <=8) {
        $this->responder();
      } else {
        $this->executarMania(); 
      }
    }

}

class Filho extends Pai {
     public function __construct() {
         //exibir os metodos do objeto
           echo '<pre>';
           print_r(get_class_methods($this));
           echo '<pre>';
     }

    private function executarMania() {
        echo 'Cantar';
    }
    public function x() {
        $this->executarMania();
    }
}

//$pai = new Pai();
//echo $pai->executarAcao();

$filho = new Filho();
echo '<pre>';
print_r($filho);
echo '<pre>';

$filho->executarAcao();
echo '<br>';
$filho->x();

?>
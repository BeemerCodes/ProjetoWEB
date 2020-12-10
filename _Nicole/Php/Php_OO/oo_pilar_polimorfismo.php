<?php

class Carro extends Veiculo{
    public $teto_solar = true;

    function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar() {
        echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante() {
        echo 'Posicao volante';
    }
}

class Moto extends Veiculo {
    public $contraPesoGuidao = true;

    function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar() {
        echo 'Empinar';
    }

    function trocarMarcha() {
        echo 'Desengatar embreagem com a mao e engatar marcha com a pe';
    }
}

class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelerar() {
        echo 'Acelerar';
    }

    function freiar() {
      echo 'Freiar';
    }

    function trocarMarcha() {
        echo 'Desengatar embreagem com o pe e engatar marcha com a mao';
    }

}

$carro = new Carro('ABC1234', 'Branco');
$moto = new Moto('DDD7685', 'Vermelho');
$carro->trocarMarcha();
echo '<br>';
$moto->trocarMarcha();
?>
<?php

// Interface
interface Veiculo {

    public function acelerar($velocidade);
    public function parar($velocidade);
    public function desligar($veiculo);

}

// Abstract
abstract class Automovel implements Veiculo {
   
    public function acelerar( $velocidade)
    {
        echo "Acelerando em Km/h: " . $velocidade;
    }

    public function parar( $velocidade)
    {
        echo "Parando em :" . $velocidade;
    }

    public function desligar( $veiculo)
    {
        echo $veiculo . " Desligado";
    }

}
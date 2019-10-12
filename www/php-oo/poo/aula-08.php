<pre>
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

// Extends
class DelRey extends Automovel {

    public function empurrar()
    {
        echo "Empurrando DelRey";
    }
}

$carro = new DelRey();

$carro->acelerar(200);
echo "<br>";
$carro->desligar("Delrey");
echo "<br>";
$carro->empurrar();
echo "<br>==========================<br>";

// Polimorfismo

class Fusca extends DelRey{
    public function empurrar()
    {
        echo parent::desligar("Fusca") . " sendo Guinchado";
    }
}

$carro2 = new Fusca();
$carro2->empurrar();
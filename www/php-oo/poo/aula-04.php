<?php

class Endereco {
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }

    public function __destruct()
    {
        var_dump("Destruiu");
    }

    public function __toString()
    {
        return $this->logradouro.",".$this->numero.",".$this->cidade;
    }

}

$local = new Endereco("Rua Ademar Saraia", "123", "Fotaleza");

echo $local;

//var_dump($local);

//unset($local);

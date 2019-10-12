<?php

// Herança

class Senha {

    private $codigo;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

}

// Extendend a classe
class Cartao extends Senha {

    public function validar():bool
    {   
        return $this->getCodigo() === 123 ? true : false;
    }

}

$acesso = new Cartao();

$acesso->setCodigo(123);

$acesso->validar();

var_dump($acesso->validar());

echo $acesso->getCodigo();

echo "<br>";

$acesso->setCodigo(554);

var_dump($acesso->validar());

echo $acesso->getCodigo();
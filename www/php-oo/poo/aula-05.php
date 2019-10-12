<?php

    // Encapsulamento

class Pessoa {

    public $nome = "João";
    protected $idade = "32";
    private $senha = "123";

    public function verDados()
    {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }


}

$object = new Pessoa();

//echo $object->nome;

$object->verDados();
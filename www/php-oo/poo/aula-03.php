<?php

class Documento {

    private $numero;

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $resultado = Documento::validarCpf($numero);
        
        if($resultado === false)
        {
            throw new Exception("Cpf informado é inválido", 1);
        }

        $this->numero = $numero;
    }

    public static function validarCpf($cpf):bool
    {
        if(empty($cpf)) return false;
        else return true;
    }

}
// Instanciando a Classe

/*
$cpf = New Documento();
$cpf->setNumero("5455");

var_dump($cpf->getNumero());

*/

var_dump(Documento::validarCpf("5584"));


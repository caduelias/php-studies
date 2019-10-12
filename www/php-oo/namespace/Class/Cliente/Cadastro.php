<?php

namespace Cliente;

class Cadastro extends \Cadastro {

    public function registrarCliente()
    {
        echo " O cliente: " .$this->getNome() .", foi registrado com Sucesso!";
    }

    public function enviarEmail()
    {
        echo "Foi enviado um email de confirmação para: ( " .$this->getEmail() . ") Verifique seu E-mail!";
    }

}

?>
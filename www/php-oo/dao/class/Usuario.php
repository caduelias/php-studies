<?php

class Usuario{

    private $codigo;
    private $nome;
    private $email;

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function loadById($codigo)
    {   
        // instanciando a classe sql para consultar no BD
        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM pessoa WHERE codigo = :codigo", array(
            ":codigo"=>$codigo
        ));

        if (count($resultado) > 0)
        {
            $row = $resultado[0];

            $this->setCodigo($row['codigo']);
            $this->setNome($row['nome']);
            $this->setEmail($row['email']);
        }
    }

    // Trazendo os dados e convertendo em string e mostrando num array json_encode
    public function __toString()
    {
        return json_encode(array(
        "codigo"=>$this->getCodigo(),
        "nome"=>$this->getNome(),
        "email"=>$this->getEmail()
        ));
    }
}
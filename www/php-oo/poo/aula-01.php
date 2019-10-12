<pre>
<?php

//Criando a classe
class Pessoa
{
    //Definindo os atributos
    public $mente;
    private $pensamento;
    private $acoes;

    //Criando os métodos
    public function Pensar()
    {
        return "Por Quê?".$this->mente;
    }

    public function getPensamento()
    {
        return $this->pensamento;
    }

    public function setPensamento($pensamento)
    {
        $this->pensamento = $pensamento;
    }

    public function getAcoes()
    {
        return $this->acoes;
    }

    public function setAcoes($acoes)
    {
        $this->acoes = $acoes;
    }

    public function preverAcoes()
    {
        return array (
            "pensamento"=>$this->getPensamento(),
            "acoes"=>$this->getAcoes()
        );
    }

}
//Instanciando um novo objeto a partir da classe pessoa
$filosofo = new Pessoa();
$filosofo->mente = "Questionar";
$filosofo->setPensamento("Duvidar");
$filosofo->setAcoes("Buscar");

echo "<br>";
echo $filosofo->Pensar();

echo "<br>";
print_r($filosofo->preverAcoes());
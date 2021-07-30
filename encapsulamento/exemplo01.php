<?php 

class Cadastro{
    
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function VerDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

$objeto = new Cadastro();

//echo $objeto->senha."<br>";

$objeto->VerDados();





?>
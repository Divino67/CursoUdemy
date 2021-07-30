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

class programador extends Cadastro{

    public function VerDados(){

        echo get_class($this) . "<br>";

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }



}




$objeto = new programador();

//echo $objeto->senha."<br>";

$objeto->VerDados();





?>
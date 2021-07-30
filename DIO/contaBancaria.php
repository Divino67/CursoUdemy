<?php 

class contaBancaria{

    private $banco;
    private $nomeTitular;
    private $numeroAgencia; 
    private $numeroConta;
    private $saldo = 1000.00;

    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo){
        
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;

    }



    public function obterSaldo(){

        return "Seu saldo atual é " . $this->saldo;
    }


    public function depositar($valor){

        $this->saldo += $valor;
        return 'deposito de ' . $valor . ' realizado';
    }

    public function sacar($valor){

        echo "Saque de " .$valor ." realizado. ";
        $this->saldo -= $valor;

    }


}

$conta1 = new contaBancaria(
    'Banco do Brasil',
    'Gustavo Fraga',
    '1341',
    '1542865613156',
    0
);

$conta2 = new contaBancaria(
    'Caixa Econômica',
    'Renata Oliveira',
    '4859',
    '584975-22',
    300
);

var_dump($conta1);
echo "<hr>";
var_dump($conta2);
/*echo $conta->obterSaldo();

echo "<br>";

$conta->depositar(300);

echo PHP_EOL;

echo $conta->obterSaldo();

echo PHP_EOL;
echo "<br>";

$conta->sacar(100);
echo $conta->obterSaldo();

*/












?>
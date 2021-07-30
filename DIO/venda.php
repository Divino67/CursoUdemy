<?php 

class Venda{

    public $data;
    public $produto;
    public $quantidade;
    public $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal){

        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;

    }

$compra1 = new Venda(
        '03/07/2021',
        'gel de cabelo',
        3,
        30
    );



    public function dadosVenda(){

        return "data da compra: " .$data .". <br>" . "Comprou " .$quantidade . " " .$produto ." com o valor total de R$ " .$valorTotal;
    }

}




echo $compra1->dadosVenda();












?>
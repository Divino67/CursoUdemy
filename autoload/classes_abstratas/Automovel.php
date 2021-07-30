<?php 


interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}








abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "o veículo acelerou até: " . $velocidade . " km/h";
    }

    public function freiar($velocidade){
        echo "o veículo freiou em: " . $velocidade . " km/h";
    }

    public function trocarMarcha($marcha){
        echo "o veículo está na marcha número: " .$marcha;
    }
}








?>
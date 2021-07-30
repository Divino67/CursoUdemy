<?php 

abstract class Animal{

    public function falar(){
        return "Som"; 
    }

    public function mover(){
        return "anda";
    }
}

class Passaro extends Animal{

    public function falar(){
        return "canta";
    }
    public function mover(){
        return "voa e " . parent::mover();
    }
}

class Cachorro extends Animal{

    public function falar(){
        return "late";
    }
}

class Gato extends Animal{
    
    public function falar(){
        return "mia";
    }
}




$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "<hr>";

$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "<hr>";

$passaro = new Passaro();
echo $passaro->mover(). "<br>";
echo $passaro->falar(). "<br>";

?>
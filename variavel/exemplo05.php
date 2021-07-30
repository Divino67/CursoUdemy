<?php

$nome = "Glaucio";

function teste1() {


global $nome;    
echo $nome . "</br>";



}


function teste2() {
global $nome;
echo $nome . " agora no teste 2";


}


teste1();
teste2();


?>




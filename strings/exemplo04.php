<?php 

$frase = "A repetição é a mãe da retenção";

$palavra = "mãe";


$q = strpos($frase, "mãe"); //essa função localiza uma palavra na string.
//var_dump($q);

$texto = substr($frase, $q + strlen($palavra), strlen($frase) );
var_dump($texto)

//$texto = substr($frase, 0, $q); //essa função seleciona o texto de uma variavel. o primeiro termo seleciona da onde começa e o segundo aonde termina, nesse caso na posição 19.
//var_dump($texto);






?>
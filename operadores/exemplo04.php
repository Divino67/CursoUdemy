<?php

$a = 55.0;
$b = 55;

var_dump($a > $b);
echo "<br/>";
var_dump($a < $b);
echo "<br/>";

var_dump($a = $b); //1 igual só significa atribuição, estou atribuindo o valor de $b para o de $a;
echo "<br/>";

var_dump($a == $b); // 2 iguais significa comparação, o código vai comparar se o valor de $a é igual de $b independete do tipo de ambos.    
echo "<br>";

var_dump($a === $b); // 3 iguais vai comparar tanto o valor de $a para $b como o tipo da variável.
echo "<br>";

var_dump($a != $b); // != vai validar apenas o valor.
echo "<br>";

var_dump($a !== $b); // !== esse vai validar também o tipo de dado.





?>
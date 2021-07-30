<?php

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;  // esse operador ignora a variavel que for NULL e passa para a próxima ate achar uma que contenha um tipo.




?>
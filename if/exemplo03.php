<?php

$salario = 10000;

$salarioBaixo = 999;
$salarioBom = 2100;
$salarioAlto = 5000;

if ($salario < $salarioBaixo) {

    echo "Seu salário é baixo";

} elseif ($salario < $salarioBom) {

    echo "Seu salário é bom";

} elseif ($salario < $salarioAlto) {

    echo "Seu salário é alto";

} else {
    echo "Seu salário é altíssimo";
}



?>
<?php


$nome = "joão rangel";

$nome = strtoupper($nome); //strtoupper coloca a variavel em capslock.
echo $nome;
echo "<br>";

$nome = strtolower($nome); //strtolower coloca a variavel em minúsculo novamente.
echo $nome;
echo "<br>";

$nome = ucwords($nome); // ucwords coloca a primeira letra de cada palavra em maiúscula.
echo $nome;
echo "<br>";

$nome = ucfirst($nome); // ucfirst coloca somente a primeira letra em maiúscula.
echo $nome;
echo "<br>";

?>
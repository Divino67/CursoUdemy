<?php




$qualASuaIdade = 15;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade < $idadeCrianca){

echo "Criança";

} else if ($qualASuaIdade < $idadeMaior){

    echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor){

    echo "Adulto";
} else {

    echo "Idoso";
}

echo "<br>";

echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"Maior de idade"; // Essa frase testa se a idade é menor que $idadeMaior, se for, a primeira string é apresentada se não, a segunda. : = else.





?>
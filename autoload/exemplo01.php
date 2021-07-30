<?php 


function __autoload($DelRey){

    require_once("$DelRey.php");
}

$carro->acelerar(80);


//require_once("DelRey.php");

$carro = new DelRey();











?>
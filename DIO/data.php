<?php 


/*
$data = new DateTime();

var_dump($data);

echo $data->format('d-m-Y H:i:s');

echo time();  

$data = new DateTime();

$intervalo = new DateInterval('P5Y10M3WT3H8M4S');
$data->add($intervalo);

var_dump($data); */

$data = new DateTime(); 
echo $data->format('d/m/Y - H:i:s');

$intervalo = new DateInterval('P5DT10H50M');

$data->sub($intervalo);





?>
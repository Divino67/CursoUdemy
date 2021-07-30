<?php 

session_id('7gun0q1knq6jl3bpff4bvacjn6');
require_once("config.php");

session_regenerate_id();

echo session_id();
echo "<br>";
var_dump($_SESSION);







?>
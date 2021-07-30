<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN, dessenha = PASSWORD where idusuario = :ID");



$stmt->execute();



?>
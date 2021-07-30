<?php 

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");



$stmt = $conn->prepare("insert into tb_usuarios(deslogin, dessenha) values (:LOGIN,:PASSWORD)");
$stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

$login = "Joao";
$password = "23";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "dados alterados com sucesso";










?>
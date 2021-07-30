<?php 

$conn = new mysqli("localhost", "root",  "", "dbphp7");

if ($conn->connect_error){

    echo "error: " . $conn->connect_error;

}

$stmt = $conn->prepare("insert into tm_usuarios (deslogin, dessenha) values (?,?)");


$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "123456";

$stmt->execute();

$login = "root";
$pass = "%$#@";

$stmt->execute();







?>
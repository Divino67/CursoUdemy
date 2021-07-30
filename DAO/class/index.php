<?php 

require_once("config.php");


//carrega uma lista de usuarios
/*$lista = Usuario::getList();

echo json_enconde($lista);*/






//carrega um usuario por vez.
/*$root = new Usuario();
$root->loadbyid(3);

echo $root;
*/


//carrega uma lista de usuarios buscando pelo login.
//$search = Usuario::search("jo");
//echo json_encode($search);

/*carrega um usúario usando o login e a senha.
$usuario = new Usuario();
$usuario->login("root","!@#$");
echo $usuario;*/
/*
//criando um novo usuario
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");

$aluno->insert();

echo $aluno;*/

//alterar um usuario
/*$usuario = new Usuario();
$usuario->loadbyid(8);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;*/

$usuario = new Usuario();
$usuario->loadbyid(7);
$usuario->delete();
echo $usuario;














?>
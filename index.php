<?php

require_once("config.php");

//carrega 1 usuário
//$root = new Usuario();
//$root->loadbyId(5);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega 1 usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root", "!@#$");

//echo $usuario;
/*
//Criando um novo usuário
$aluno = new Usuario("aluno","@lun0");
$aluno->insert();
echo $aluno;
*/
/*alterar um usuario
$usuario = new Usuario();

$usuario->loadById(19);

$usuario->update("professor","!@#$%¨&");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(12);

$usuario->delete();

echo $usuario;


?>
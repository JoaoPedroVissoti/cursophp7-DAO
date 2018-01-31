<?php 

require_once("config.php");

//carrega um usuário
//$joao = new Usuario();
//$joao->loadbyID(1);
//echo $joao;


//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//INSERT
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@alu0");
//$aluno->insert();
//echo $aluno;


$usuario = new Usuario();
$usuario->loadbyID(4);
$usuario->update("professor", "aaaaa");

echo $usuario;

 ?>
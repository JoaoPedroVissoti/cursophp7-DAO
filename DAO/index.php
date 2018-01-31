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
$search = Usuario::search("jo");
echo json_encode($search);
 ?>
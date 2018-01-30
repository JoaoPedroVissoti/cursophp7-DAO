<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios  SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "joao";
$password = "00";
$id = 1;

$stmt->bindparam(":ID", $id);
$stmt->bindparam(":LOGIN", $login);
$stmt->bindparam(":PASSWORD", $password);

$stmt->execute();

echo "Alterado OK";

 ?>
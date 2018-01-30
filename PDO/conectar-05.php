<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");


$id = 2;

$stmt->bindparam(":ID", $id);

$stmt->execute();

echo "OK";

 ?>
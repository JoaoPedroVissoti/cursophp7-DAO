<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "jose";
$password = "123";

$stmt->bindparam(":LOGIN", $login);
$stmt->bindparam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido OK";

 ?>
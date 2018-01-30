<?php 

require_once("config.php");

$joao = new Usuario();

$joao->loadbyID(1);

echo $joao;


 ?>
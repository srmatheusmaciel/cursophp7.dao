<?php 

require_once("config.php");

/* -- AULA DE DAO número 01

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

$matheus = new Usuario();

$matheus->loadbyId(1);

echo $matheus;

 ?>
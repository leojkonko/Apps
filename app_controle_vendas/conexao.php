<?php 

$host = "localhost";
$banco = "mydb";
$usuario = "root";
$senha = "root";

$mysqli = new mysqli($host, $banco, $usuario, $senha);
if ($mysqli->connect_errno) {
	echo "erro" . $mysqli->connect_errno;
}

?>
<?php
$host = "localhost";
$usuario = "teste";
$senha = "1234";
$banco = "empresa";

$conn = new mysqli($host,$usuario,$senha,$banco);

if ($conn->connect_error) {
	die("Erro de conexâo:".$conn->connect_error);
}

?>


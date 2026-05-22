<?php
$host = "sql113.infinityfree.com";
$usuario = "if0_41978070";
$senha = "IEVDM0K8Spp";
$banco = "if0_41978070_rhyos";

$conn = new mysqli($host,$usuario,$senha,$banco);

if ($conn->connect_error) {
	die("Erro de conexâo:".$conn->connect_error);
}
?>


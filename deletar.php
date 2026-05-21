<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM funcionarios WHERE id=$id";

if ($conn-query($sql) === TRUE) {
	echo "Funcionario excluído!";
}else {
 echo "Erro:".$conn->error;
}

?>
<br><br>

<a href="index.php">Voltar</a>

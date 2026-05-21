<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {

	$nome = $_POST["nome"];
	$cargo = $_POST["cargo"];
	$salario = $_POST["salario"];

	$sql = "INSERT INTO funcionarios (nome, cargo, salario)
		VALUES ('$nome','$cargo','$salario')";

	if ($conn->query($sql) ===TRUE) {
		echo "Funcionario cadrastrado com sucesso!";
	}else{
	 echo "Erro:".$conn->error;
	}
}
?>

<h2>Adicionar Funcionarios</h2>

<form method="POST">

Nome:
<br>
<input type="text" name="nome">
<br><br>

Cargo:
<br>
<input type="text" name="cargo">
<br><br>

Salário:
<br>
<input type="number" step="0.01" name="salario">

<input type="submit" value="Cadastrar">

</form>

<br>

<a href="index.php">Voltar</a>


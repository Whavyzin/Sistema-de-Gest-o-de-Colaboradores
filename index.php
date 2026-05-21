<?php include 'conexao.php'; ?>

<h2>Funcionários</h2>

<?php
$sql = "SELECT * FROM funcionarios";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	echo "Nome:".$row["nome"];
	echo "|Cargo:".$row["cargo"];
	echo "|Salário:".$row["salario"]." ";

	echo"<a href='editar.php?id=".$row["id"]."'>Editar</a> | ";
	echo"<a href='deletar.php?id=".$row["id"]."'>Excluir</a>";

echo "<br>";
}
?>

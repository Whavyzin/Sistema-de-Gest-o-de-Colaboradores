<?php
include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM funcionarios WHERE id=$id";

$resultado = mysqli_query($conn, $sql);

$dados = mysqli_fetch_assoc($resultado);
?>

<h2>Editar Funcionário</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id"
value="<?php echo $dados['id']; ?>">

<br><br>

Nome:
<br>
<input type="text" name="nome"
value="<?php echo $dados['nome']; ?>">

<br><br>

Cargo:
<br>
<input type="text" name="cargo"
value="<?php echo $dados['cargo']; ?>">

<br><br>

Salário:
<br>
<input type="text" name="salario"
value="<?php echo $dados['salario']; ?>">

<br><br>

<input type="submit" value="Salvar">

</form>

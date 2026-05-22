<?php
    session_start();
if(!isset($_SESSION['logado'])){
    header("Location: login.php"); exit;
} include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];

$sql = "UPDATE funcionarios
SET nome='$nome', cargo='$cargo', salario='$salario'
WHERE id=$id";

if(mysqli_query($conn, $sql)){
	header("Location: index.php");
}else{
	echo "Erro ao atualizar";
}
?>

<?php
    session_start();
if(!isset($_SESSION['logado'])){ 
    header("Location: login.php"); exit; 
} include("conexao.php"); 

$id = $_GET['id']; $sql = "DELETE FROM funcionarios WHERE id='".$id."'";
if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); exit; 
                               } else { echo "Erro ao excluir"; }
?>
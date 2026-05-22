<?php
    session_start();
if(!isset($_SESSION['logado'])){
    header("Location: login.php"); exit; 
} include("conexao.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <head>
            <title>RHyos</title>
        <style>
            body{ 
                margin:0; min-height:100vh; background:linear-gradient(135deg,#020617,#0f172a,#1e293b); color:white; font-family:Arial, sans-serif; padding:30px;
            } h1{
                text-align:center; color:#38bdf8; font-size:55px; margin-bottom:5px;
            } h3{
                text-align:center; color:#cbd5e1; margin-top:0; margin-bottom:40px;
            } h2{
                text-align:center; color:#f8fafc; margin-bottom:25px;
            } .funcionario, form{
                background:rgba(30,41,59,0.95); width:420px; margin:25px auto; padding:25px; border-radius:18px; box-shadow:0 10px 25px rgba(0,0,0,0.45); border:1px solid rgba(56,189,248,0.25); 
            } .funcionario:hover, form:hover{
                transform:translateY(-3px); transition:0.3s; box-shadow:0 15px 35px rgba(56,189,248,0.25); 
            } input{ width:100%; box-sizing:border-box; padding:12px; margin:8px 0 18px 0; border:none; border-radius:10px; outline:none; font-size:15px;
            } input[type=submit]{
                background:#38bdf8; color:#020617; font-weight:bold; cursor:pointer;
            } input[type=submit]:hover{ 
                background:#22c55e; transition:0.3s; 
            } a{ 
                display:inline-block; color:#22c55e; text-decoration:none; font-weight:bold; margin:8px 6px 0 0;
            } a:hover{
                color:#38bdf8;
            } .btn-excluir{
                color:#ef4444; 
            } hr{
                display:none; 
            } .funcionario{ 
                background:rgba(30,41,59,0.95); width:350px; margin:25px auto; padding:25px; border-radius:18px; box-shadow:0 10px 25px rgba(0,0,0,0.45); border:1px solid rgba(56,189,248,0.25); 
            } .funcionario h2{
                color:#38bdf8; margin-top:0;
            } .funcionario p{ 
                color:#e2e8f0; font-size:18px;
            } .logout{
            	text-align:center;
                margin-bottom:20px;
            } .logout a{
                color:#38bdf8;
                text-decoration:none;
                font-weight:bold;
            }
            </style>
    </head>
    </head> 
    <body> 
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
        <h1>RHyos</h1>
        <h3>Sistema de Gestão de Colaboradores</h3>
        <?php $sql = "SELECT * FROM funcionarios";
        $result = $conn->query($sql); while($row = $result->fetch_assoc()){ echo "<div class='funcionario'>"; echo "<h2>".$row['nome']."</h2>"; echo "<p><strong>Cargo:</strong> ".$row['cargo']."</p>"; echo "<p><strong>Salário:</strong> R$ ".$row['salario']."</p>"; echo "<a href='editar.php?id=".$row['id']."'>✏️ Editar</a>"; echo "<a class='btn-excluir' href='deletar.php?id=".$row['id']."'>🗑️ Excluir</a>"; echo "</div>"; } ?> </body> </html>
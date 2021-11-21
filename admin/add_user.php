<link rel="stylesheet" href="../style.css"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php 
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false && $_SESSION['admin']==1) {
if(isset($_POST['usuario'],$_POST['senha'],$_POST['email'])){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = $pdo->query("INSERT INTO `users` (`ID`, `usuario`, `email`, `senha`) VALUES (NULL, '$usuario', '$email', '$senha');");
    header("location: index.php");
    exit;
}
?>
<div class='container'><div class='mysql'>Novo usuário</div></div><div class='container'>
<form method="post">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Cadastrar">
</form></div>
<?php
} ?>
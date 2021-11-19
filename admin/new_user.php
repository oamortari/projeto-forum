<?php
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false) {
if(isset($_POST['usuario'],$_POST['senha'],$_POST['email'])){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = $pdo->query("INSERT INTO `users` (`ID`, `usuario`, `email`, `senha`) VALUES (NULL, '$usuario', '$email', '$senha');");
    header("location: admin.php");
}
?>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="../style.css"/>
<div class='container'><div class='mysql'>Novo usuário</div></div><div class='container'>
<form method="post">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Cadastrar">
</form></div>
<?php
} ?>
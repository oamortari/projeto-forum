<link rel="stylesheet" href="../style.css"/>
<?php
require "../config.php";
$id = $_GET['id'];
$sql = $pdo->query("SELECT * FROM users WHERE ID='$id'");
$usuario = $sql->fetch(PDO::FETCH_ASSOC);
$nome = $usuario['usuario'];
$email = $usuario['email'];
$senha = $usuario['senha'];
$senhac = md5($senha);
echo "<div class='container'><div class='mysql'>Usuário ID $id selecionado</div></div><div class='container'>
<form method='post' action='save_user.php?id=$id'>
<input type='text' name='new_user' value='$nome'>
<input type='email' name='new_mail' value='$email'>
<input type='text' name='new_pass' value='$senhac'>
<input type='submit' value='Alterar'>
</form></div>";
require "admin.php";
?>
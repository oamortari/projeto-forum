<?php
require "../config.php";
$id = $_GET['id'];
$novouser = $_POST['new_user'];
$novoemail = $_POST['new_mail'];
$novasenha = $_POST['new_pass'];
$sql = $pdo->query("UPDATE `users` SET `usuario` = '$novouser', `email` = '$novoemail', `senha` = '$novasenha' WHERE `users`.`ID` = $id;");
echo '<div class="container"><div class="mysql">Usuário alterado com sucesso!</div></div>';
require "admin.php";
?>
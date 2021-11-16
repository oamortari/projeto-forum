<?php
require "../config.php";
$id = $_GET['id'];
$sql = $pdo->query("DELETE FROM users WHERE ID='$id';");
echo '<div class="container"><div class="mysql">Usuário removido com sucesso!</div></div>';
require "admin.php";
?>
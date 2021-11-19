<?php
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false) {
$id = $_GET['id'];
$sql = $pdo->query("DELETE FROM users WHERE ID='$id';");
echo '<div class="container"><div class="mysql">Usuário removido com sucesso!</div></div>';
header("location: admin.php");}
?>
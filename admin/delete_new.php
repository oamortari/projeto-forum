<link rel="stylesheet" href="style.css"/>
<?php
require "../config.php";
$id = $_GET['id'];
$sql = $pdo->query("DELETE FROM noticias WHERE ID='$id';");
echo '<div class="container"><div class="mysql">Notícia removida com sucesso!</div></div>';
require "admin.php";
?>
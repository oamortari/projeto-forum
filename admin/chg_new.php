<link rel="stylesheet" href="../style.css"/>
<?php
require "../config.php";
$id = $_GET['id'];
$consulta = $pdo->query("SELECT * FROM noticias WHERE ID='$id'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $id = $linha["ID"];
    $titulo = $linha["titulo"];
    $desc = $linha["desc"];
    $data = $linha["data"];
echo "<div class='container'><div class='mysql'>Notícia ID $id selecionada</div></div><div class='container'>
<form method='post' action='save_new.php?id=$id'>
<input type='text' name='new_title' value='$titulo'>
<input type='date' name='new_date' value='$data'>
<textarea name='new_desc'>$desc</textarea>
<input type='submit' value='Alterar'>
</form></div>";
;}

require "admin.php";
?>
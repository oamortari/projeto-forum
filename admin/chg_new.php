<link rel="stylesheet" href="../style.css"/>
<?php
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false) {
$id = $_GET['id'];
if(isset($_POST['new_title'], $_POST['new_date'], $_POST['new_desc'])){
    $nvtitulo = $_POST['new_title'];
    $data = $_POST['new_date'];
    $texto = $_POST['new_desc'];
    $sql = $pdo->query("UPDATE `noticias` SET `titulo` = '$nvtitulo', `desc` = '$texto', `data` = '$data' WHERE `noticias`.`ID` = $id;");
    echo "<div class='container'><div class='mysql'>Notícia ID $id alterada com sucesso</div></div>";
    header("location: admin.php");
}
$consulta = $pdo->query("SELECT * FROM noticias WHERE ID='$id'");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    $id = $linha["ID"];
    $titulo = $linha["titulo"];
    $desc = $linha["desc"];
    $data = $linha["data"];
echo "<div class='container'><div class='mysql'>Notícia ID $id selecionada</div></div><div class='container'>
<form method='post'>
<input type='text' name='new_title' value='$titulo'>
<input type='date' name='new_date' value='$data'>
<textarea name='new_desc'>$desc</textarea>
<input type='submit' value='Alterar'>
</form></div>";
;}}
?>
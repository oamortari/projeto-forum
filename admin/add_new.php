<link rel="stylesheet" href="../style.css"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php 
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false && $_SESSION['admin']==1) {
    if(isset($_POST['titulo'], $_POST['data'], $_POST['texto'])){
    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $texto = $_POST['texto'];
    $sql = $pdo->query("INSERT INTO `noticias` (`ID`, `titulo`, `data`, `desc`) VALUES (NULL, '$titulo', '$data', '$texto');");
    header("location: index.php");
    exit;
    }
?>
<link rel="stylesheet" href="../style.css"/>
<div class='container'><div class='mysql'>Nova notícia</div></div><div class='container'>
<form method="POST">
    <input type="text" name="titulo" placeholder="Titulo">
    <input type="date" name="data">
    <textarea name="texto" placeholder="Texto"></textarea>
    <input type="submit" value="Adicionar">
</form></div> 
<?php 
}
?>
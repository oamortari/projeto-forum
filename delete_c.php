<link href="style.css" rel="stylesheet"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php
session_start();
require "config.php";
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false) {
    $sql=$pdo->prepare("SELECT * FROM comentarios WHERE autor = :autor;");
    $sql->bindValue(":autor", $_SESSION['user']);
    $sql->execute();
    $dado = $sql->fetch();
    $autor_c = $dado['autor'];
}
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false && $_SESSION['admin']==1 || ($_SESSION['user']==$autor_c)) {
    $id = $_GET['id'];
    $id_n = $_GET['id_n'];
    $sql = $pdo->prepare("DELETE FROM comentarios WHERE id=:id;");
    $sql->bindValue(":id", $id);
    $sql->execute();
    header("location: ./noticia.php?id=$id_n");
    exit;
}
?>
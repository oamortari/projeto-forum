<link href="style.css" rel="stylesheet"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php
session_start();
require "config.php";
$id = $_GET['id'];
//enviar comentário
if(isset($_POST['autor']) && !empty($_POST['autor'])) {
    $sql = $pdo->prepare("INSERT INTO `comentarios` (`id`, `id_noticia`, `autor`, `data`, `corpo`) VALUES (NULL, :id, :autor, NULL, :corpo);");
    $sql->bindValue(":id", $id);
    $sql->bindValue(":autor", $_POST['autor']);
    $sql->bindValue(":corpo", $_POST['corpo']);
    $sql->execute();  
}
//mostrar as noticias
$sql = $pdo->prepare("SELECT * FROM noticias WHERE id = :id");
$sql->bindValue(":id",$id);
$sql->execute();
if ($sql->rowCount() > 0) {
    $dado = $sql->fetch(PDO::FETCH_ASSOC);
    $id = $dado['ID'];
    $titulo = $dado['titulo'];
    $data = $dado['data'];
    $texto = $dado['desc'];
    echo "
    <div class='container'>
    <div class='op_geral'>
    <div class='op_title'>$titulo</div>
    <div class='op_ico'>$data</div>
    <div class='op_desc'>$texto</div>
    </div></div></a>";
} else {
    echo "
    <div class='container'>
    <div class='mysqle'>Essa notícia não existe!
    </div></div>";
    exit;
}
//mostrar os comentários
$sql = $pdo->prepare("SELECT * FROM comentarios WHERE id_noticia = :id");
$sql->bindValue(":id",$id);
$sql->execute();
if ($sql->rowCount() > 0) {
    echo "
    <div class='container'>
    Comentários:
    </div>";
    foreach($sql->fetchAll() as $comentario):
        $autor_c = $comentario['autor'];
        $corpo_c = $comentario['corpo'];
        $id_c = $comentario['id'];
    echo "
    <div class='container'>
    <div class='op_geral'>
    <div class='op_title'>$autor_c</div>
    <div class='op_ico'></div>
    <div class='op_desc'>$corpo_c</div>";
    if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false && $_SESSION['admin']==1) {
        echo "<a href=delete_c.php?id=$id_c&id_n=$id>Excluir</a></div></div>";
    } echo "</div></div>";
    endforeach;
} else {
    echo "
    <div class='container'>
    <div class='mysqle'>Não há comentários ainda!
    </div></div>";
}
//campo para comentar
?>
<div class='container'>
<form method="post">
    Autor<br/>
    <input type="text" name="autor" placeholder="Qual o seu nome?"><br/><br/>
    Faça seu comentário!<br/>
    <textarea name="corpo"  rows="10" cols="30"></textarea><br/><br/>
    <input type="submit" value="Comentar">
</form></div>
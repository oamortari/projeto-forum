<link rel="stylesheet" href="../style.css"/>
<?php
require "../config.php";

if(isset($_POST['titulo'], $_POST['data'], $_POST['texto'])){
    $titulo = $_POST['titulo'];
    $data = $_POST['data'];
    $texto = $_POST['texto'];
        $sql = $pdo->query("INSERT INTO `noticias` (`ID`, `titulo`, `data`, `desc`) VALUES (NULL, '$titulo', '$data', '$texto');");
        echo '<div class="container"><div class="mysql">Notícia adicionada com sucesso!</div></div>';
        require "admin.php";
};
?>
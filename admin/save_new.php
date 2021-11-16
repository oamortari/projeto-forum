<link rel="stylesheet" href="../style.css"/>
<?php
include "../config.php";    
if(isset($_POST['new_title'], $_POST['new_date'], $_POST['new_desc'])){
    $id = $_GET['id'];
    $nvtitulo = $_POST['new_title'];
    $data = $_POST['new_date'];
    $texto = $_POST['new_desc'];
        $sql = $pdo->query("UPDATE `noticias` SET `titulo` = '$nvtitulo', `desc` = '$texto', `data` = '$data' WHERE `noticias`.`ID` = $id;");
        echo '<div class="container"><div class="mysql">Notícia alterada com sucesso!</div></div>';
        require "admin.php";
};
?>
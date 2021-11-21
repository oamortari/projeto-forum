<link rel="stylesheet" href="../style.css"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php 
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false && $_SESSION['admin']==1) {
?>
<div class="container">Bem-vindo, <?php echo $_SESSION['user']; ?> - <a href="sair.php">Sair</a></div>
<div class="container">
<div class="admin_mestre">
<div class="admin_function"><a href="add_new.php">Nova notícia</a></div>
<div class="meio">
    <?php 
    $sql = $pdo->query("SELECT * FROM noticias ORDER BY ID DESC");
    if($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $dado):
        $id = $dado['ID'];
        $titulo = $dado['titulo'];
        $data = $dado['data'];
        $texto = $dado['desc'];
    echo "
        <div class='op_geral' onclick='myFunction()'>
        <div class='op_title'>$titulo</div>
        <div class='op_ico'>$data</div>
        <div class='op_desc'>$texto</div>
        <a href='delete_new.php?id=$id'>Excluir</a> 
        <a href='chg_new.php?id=$id'>Alterar</a><br> 
        <a href='../noticia.php?id=$id'>Comentários</a><br>
        </div>";
        endforeach;
        } else {
            echo "<div class='mysqle'>Não há notícias cadastradas</div>";
        }
    ?>
    </div>
</div>
</div> <br/>
<div class="container">
    <div class="admin_mestre">
<div class="admin_function"><a href="add_user.php">Novo usuário</a></div>
<div class="meio">
<?php
$sql = $pdo->query("SELECT * FROM users");
if($sql->rowCount() > 0) {
        foreach($sql->fetchAll() as $dado):
        $id = $dado['ID'];
        $usuario = $dado['usuario'];
        $email = $dado['email'];
        $senha = $dado['senha'];
        echo "<div class='op_geral'>
        <div class='op_title'>$usuario - usuário</div>
        <div class='op_ico'>$email - email</div>
        <div class='op_desc'>$senha - senha</div>
        <a href='delete_user.php?id=$id'>Excluir</a> 
        <a href='chg_user.php?id=$id'>Alterar</a><br>
        </div>";
        endforeach;
        } else {
            echo "<div class='mysqle'>Não há usuários cadastrados</div>";
        };
?>
    </div><?php
;
} else {
    header('Location: login.php');
}
?>


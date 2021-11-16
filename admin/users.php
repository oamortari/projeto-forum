<link rel="stylesheet" href="../style.css"/>
<?php
require "../config.php";
$sql = $pdo->query("SELECT * FROM users");
if($sql->rowCount()>0) {
    foreach ($sql->fetchAll() as $usuario) {
        $id = $usuario['ID'];
        $senha = $usuario['senha'];
        $senhac = md5($senha);
        echo "<div class='op_geral'>
        <div class='op_title'>{$usuario['usuario']} - usuário</div>
        <div class='op_ico'>{$usuario['email']} - email</div>
        <div class='op_desc'>$senhac - md5 password</div>
        <a href='delete_user.php?id=$id'>Excluir</a> 
        <a href='chg_user.php?id=$id'>Alterar</a><br>
        </div>";
    };
}
?>
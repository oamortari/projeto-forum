<?php 
require "../config.php";
session_start();
if (isset($_POST['usuario']) && empty($_POST['usuario'])==false) {
    $usuario = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);
    $sql = $pdo->query("SELECT * FROM `users` WHERE usuario = '$usuario' and senha = '$senha' and admin ='1'");
    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
        $_SESSION['ID'] = $dado['ID'];
        $_SESSION['user'] = $dado['usuario'];
        header('Location: admin.php');

    } else {
        echo "Permissão inválida";
    }
}
?>
<link rel="stylesheet" href="../style.css"/>
<meta charset="UTF-8"/>
<div class="container">
    <div class="registro"><h1>Painel ADMIN</h1>
<form method="POST">
    <input type="text" name="usuario" placeholder="Usuário"><br/>
    <input type="password" name="senha" placeholder="Senha"><br/>
    <input type="submit" value="Login">
    </form>
    </div>
</div>

<link rel="stylesheet" href="../style.css"/>
<?php
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false) {
$id = $_GET['id'];
if(!empty($_POST['new_user']) && !empty($_POST['new_mail']) && !empty($_POST['new_pass'])){
    $nome = $_POST['new_user'];
    $email = $_POST['new_mail'];
    $senha = $_POST['new_pass'];
    $sql = $pdo->query("UPDATE `users` SET `usuario` = '$nome', `email` = '$email', `senha` = '$senha' WHERE `users`.`ID` = $id;");
    echo "<div class='container'><div class='mysql'>Usuário ID $id alterado com sucesso</div></div>";
    header("location: admin.php");
}
$sql = $pdo->query("SELECT * FROM users WHERE ID='$id'");
$usuario = $sql->fetch(PDO::FETCH_ASSOC);
$nome = $usuario['usuario'];
$email = $usuario['email'];
$senha = $usuario['senha'];
echo "<div class='container'><div class='mysql'>Usuário ID $id selecionado</div></div><div class='container'>
<form method='post'>
<input type='text' name='new_user' value='$nome'>
<input type='email' name='new_mail' value='$email'>
<input type='text' name='new_pass' value='$senha'>
<input type='submit' value='Alterar'>
</form></div>";}
?>
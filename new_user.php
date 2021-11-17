<?php 
require "config.php";
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = $pdo->query("INSERT INTO `users` (`ID`, `usuario`, `email`, `senha`) VALUES (NULL, '$usuario', '$email', '$senha');");
echo '<div class="container"><div class="mysql"><b>Cadastro efetuado com sucesso!</b>Usuário:'.$usuario.'<br>Email: '.$email.'</div></div>';
require "index.php";
?>
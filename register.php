<link href="style.css" rel="stylesheet"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php
require "config.php";
session_start();
if(isset($_SESSION['ID']) && !empty($_SESSION['ID'])){
    header("location: index.php");
}
if (isset($_POST['usuario']) && empty($_POST['usuario']) or isset($_POST['email']) && empty($_POST['email']) or isset($_POST['senha']) && empty($_POST['senha'])) {
    echo "<div class='container'><div class='mysqle'>Preencha todos os campos!</div></div> <br>
    <div class='container'><a href='register.php'>Voltar</a></div>";
    exit;
}
if(isset($_POST['usuario']) && !empty($_POST['usuario'])) {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = $pdo->query("SELECT * FROM users WHERE usuario = '$usuario'");
    if($sql->rowCount() > 0) {
        echo "<div class='container'><div class='mysqle'>Usuário já cadastrado!</div></div> <br>
        <div class='container'><a href='register.php'>Voltar</a></div>";
        exit;
    }
    $sql = $pdo->query("SELECT * FROM users WHERE email = '$email'");
    if($sql->rowCount() > 0) {
        echo "<div class='container'><div class='mysqle'>E-mail já cadastrado!</div></div> <br>
        <div class='container'><a href='register.php'>Voltar</a></div>";
        exit;
    }
    else {
    $sql = $pdo->prepare("INSERT INTO `users` (`ID`, `usuario`, `email`, `senha`) VALUES (NULL, :usuario, :email, :senha);");
    $sql->bindValue(':usuario', $usuario);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':senha', $senha);
    $sql->execute();
    echo '<div class="container"><div class="mysql"><b>Cadastro efetuado com sucesso!</b>Usuário:'.$usuario.'<br>Email: '.$email.'</div></div>';}
} 
?>
<div class="container">
    <div class="registro"><h1>Registre-se</h1>
<form method="POST">
    <input type="text" name="usuario" placeholder="Usuário"><br/>
    <input type="email" name="email" placeholder="Email"><br/>
    <input type="password" name="senha" placeholder="Senha"><br/>
    <input type="submit" value="Cadastrar">
    </form>
    </div>
</div>
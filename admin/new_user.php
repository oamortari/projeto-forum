<meta charset="UTF-8"/>
<link rel="stylesheet" href="../style.css"/>
<div class='container'><div class='mysql'>Novo usuário</div></div><div class='container'>
<form method="post" action="add_user.php">
    <input type="text" name="usuario" placeholder="Usuário">
    <input type="password" name="senha" placeholder="Senha">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Cadastrar">
</form></div>
<?php
require "admin.php"; ?>
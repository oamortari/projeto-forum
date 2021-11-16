<link rel="stylesheet" href="../style.css"/>
<div class='container'><div class='mysql'>Nova notícia</div></div><div class='container'>
<form method="POST" action="admin_news_add.php">
    <input type="text" name="titulo" placeholder="Titulo">
    <input type="date" name="data">
    <textarea name="texto" placeholder="Texto"></textarea>
    <input type="submit" value="Adicionar">
</form></div>

<?php require "admin.php"; ?>
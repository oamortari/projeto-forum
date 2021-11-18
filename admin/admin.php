<?php 
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false) {
    ?>
   <link rel="stylesheet" href="style.css"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
Bem-vindo, <?php echo $_SESSION['user']; ?> - <a href="sair.php">Sair</a>
<div class="container">
    <div class="admin_mestre">
<div class="admin_function"><a href="admin_news.php">Nova notícia</a></div>

<div class="meio">
    <?php include "admin_news_chg.php" ;?>
    </div>
</div>
</div> <br/>
<div class="container">
    <div class="admin_mestre">
<div class="admin_function"><a href="new_user.php">Novo usuário</a></div>
<div class="meio">
<?php include "users.php" ;?>
    </div><?php
;
} else {
    header('Location: login.php');
}
?>


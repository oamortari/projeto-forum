<link rel="stylesheet" href="../style.css"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php 
require "../config.php";
session_start();
if (isset($_SESSION['ID']) && empty($_SESSION['ID'])==false && $_SESSION['admin']==1) {
$id = $_GET['id'];
$sql = $pdo->query("DELETE FROM noticias WHERE ID='$id';");
echo '<div class="container"><div class="mysql">Notícia removida com sucesso!</div></div>';
header("location: index.php");
exit;
}
?>
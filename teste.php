<?php include "config.php";

$consulta = $pdo->query("SELECT * FROM noticias ORDER BY ID DESC LIMIT 1");
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    echo "Título: {$linha['titulo']}<br/>";
    echo "Autor: {$linha['autor']}<br />";
    echo "Texto: {$linha['corpo']}<br />";
}
?>
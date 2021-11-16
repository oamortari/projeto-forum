<link rel="stylesheet" href="../style.css"/>
<?php
include "../config.php";        
                    $consulta = $pdo->query("SELECT * FROM noticias ORDER BY ID DESC");
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                        $id = $linha["ID"];
                        $titulo = $linha["titulo"];
                        $desc = $linha["desc"];
                        $data = $linha["data"];
                    echo "
                        <div class='op_geral' onclick='myFunction()'>
                        <div class='op_title'>{$linha['titulo']}</div>
                        <div class='op_ico'>{$linha['data']}</div>
                        <div class='op_desc'>{$linha['desc']}</div>
                        <a href='delete_new.php?id=$id'>Excluir</a> 
                        <a href='chg_new.php?id=$id'>Alterar</a><br>
                        </div>
                        ";}
                    ?>
<?php
include "config.php";        
                    $consulta = $pdo->query("SELECT * FROM noticias ORDER BY ID DESC LIMIT 5");
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <div class='op_geral' onclick='myFunction()'>
                        <div class='op_title'>{$linha['titulo']}</div>
                        <div class='op_ico'>{$linha['data']}</div>
                        <div class='op_desc'>{$linha['desc']}</div>
                        </div>
                        ";}
                    ?>
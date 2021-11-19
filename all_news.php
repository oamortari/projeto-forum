<?php
include "config.php";        
                    $sql = $pdo->query("SELECT * FROM noticias ORDER BY ID DESC");
                    if($sql->rowCount() > 0) {
                        foreach($sql->fetchAll() as $dado):
                        $id = $dado['ID'];
                        $titulo = $dado['titulo'];
                        $data = $dado['data'];
                        $texto = $dado['desc'];
                        echo "<div class='container'>
                        <div class='op_geral' onclick='myFunction()'>
                        <div class='op_title'>$titulo</div>
                        <div class='op_ico'>$data</div>
                        <div class='op_desc'>$texto</div>
                        </div></div>";
                        endforeach;
                        } else {
                            echo "<div class='container'><div class='mysqle'>Não há notícias cadastradas</div></div>";
                        }
                    ?>
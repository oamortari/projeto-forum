<link href="style.css" rel="stylesheet"/>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, user-scalable=no">
<?php
include "config.php";        
                    $sql = $pdo->query("SELECT * FROM noticias ORDER BY ID DESC LIMIT 5");
                    if($sql->rowCount() > 0) {
                        foreach($sql->fetchAll() as $dado):
                        $id = $dado['ID'];
                        $titulo = $dado['titulo'];
                        $data = $dado['data'];
                        $texto = $dado['desc'];
                        echo "
                        <div class='op_geral'>
                        <div class='op_title'><a class='op' href='./noticia.php?id=$id'>$titulo</div>
                        <div class='op_ico'>$data</div>
                        <div class='op_desc'>$texto</div>
                        </div></a>";
                        endforeach;
                        } else {
                            echo "<div class='mysqle'>Não há notícias cadastradas</div>";
                        }
                        ?>
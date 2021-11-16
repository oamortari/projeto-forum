<link href="style.css" type="text/css" rel="stylesheet"/>
<?php
$dns = "mysql:dbname=website;host=localhost;charset=utf8";
$dbuser = "root";
$dbpass = "";
try {
    $pdo = new PDO($dns,$dbuser,$dbpass);
    echo "";
}
catch(PDOException $e) {
    echo "MySQL conex?o falhou: ".$e -> getMessage();
}
?>
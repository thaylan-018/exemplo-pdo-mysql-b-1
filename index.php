<?php
require_once './vendor/autoload.php';
use PDO;

$bd = new PDO('mysql:host=localhost;dbname=biblioteca', 'root', '');
$comando = $bd->prepare('SELECT * FROM generos');
$comando->execute();

$generos = $comando->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Biblioteca</title>
    </head>
    <body>
        
    </body>
</html>
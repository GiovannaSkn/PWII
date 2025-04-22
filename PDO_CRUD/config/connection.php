<?php
 // configuração da conexão com BD
    $host = 'localhost';
    $database = 'escola';
    $user = 'root';
    $password = '';
// relazinado conexão com o BD por meio do plugin PHP PDO
try{
$pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
} catch (PDOException $erro) {
     die('erro na conexão:' . $erro->getMessage());
}
?>
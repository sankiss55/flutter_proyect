<?php
$usuario="sanrec";
$contrasena="sanprogramer";
try{
$pdo=new PDO("mysql:host=mysql-sanrec.alwaysdata.net;dbname=sanrec_react;", $usuario, $contrasena);
$pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
}catch(PDOException $e){
    echo($e);
}

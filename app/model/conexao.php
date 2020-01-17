<?php
$host = "localhost";
$user = "root";
$pass = "usbw";
$db = "loja";

$connect = mysqli_connect($host, $user, $pass, $db);

if(!$connect){
    echo"erro ao conectar a base de dados";
}
?>
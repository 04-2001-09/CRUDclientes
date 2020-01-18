<?php

     class Banco{
         public static function connect(){
            $host = "localhost";
            $user = "root";
            $pass = "usbw";
            $db = "loja";
            
            $connect = mysqli_connect($host, $user, $pass, $db);
            if(!$connect){
                return "erro ao conectar a base de dados";
            }
            return $connect;
         }
     }

?>
<?php
session_start();
    require_once '../model/conexao.php';
    $id =  $_GET['id'];
    $sql = "UPDATE clientes SET situation = 1 WHERE id = '$id'";
    
    mysqli_query($connect, $sql)or die(mysqli_error("Erro ao deletar o usuario"));
    $_SESSION['success'] = 1;
    header('Location: ../../index.php?page=home');
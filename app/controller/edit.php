<?php
require_once '../model/conexao.php';
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $tipoEnd = $_POST['tipoEnd'];
    $nomeRua = $_POST['nomeRua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $telefone1 = $_POST['telefone1'];
    $telefone2 = $_POST['telefone2'];
    $id = $_POST['id'];
    $erros = [];

    if (!$nome) {
        array_push($erros, "Necessario preencher o campo nome");
    }
    if (!$sobrenome) {
        array_push($erros, "Necessario preencher o campo sobrenome");
    }
    if (!$email) {
        array_push($erros, "Necessario preencher o campo email");
    }
    if (!$cep) {
        array_push($erros, "Necessario preencher o campo cep");
    }
    if ($tipoEnd == '...') {
        array_push($erros, "Necessario preencher o campo tipo de endereço");
    }
    if (!$nomeRua) {
        array_push($erros, "Necessario preencher o campo nome da rua");
    }
    if (!$numero) {
        array_push($erros, "Necessario preencher o campo numero");
    }
    if (!$bairro) {
        array_push($erros, "Necessario preencher o campo bairro");
    }
    if (!$telefone1) {
        array_push($erros, "Necessario preencher o campo telefone");
    }
    if (!$telefone2) {
        array_push($erros, "Necessario preencher o campo outro telefone");
    }

    if($erros){
        session_start();
        $_SESSION['erros'] = $erros;
        header('Location: ../../index.php?page=edit&id='.$id);
    }else{
        
        $sql = "UPDATE
                    clientes
                 SET
                    nome = '$nome',
                    sobrenome = '$sobrenome', 
                    email = '$email',
                    cep = '$cep',
                    tipoEnd = '$tipoEnd', 
                    nomeRua = '$nomeRua', 
                    numero = '$numero', 
                    bairro = '$bairro', 
                    telefone1 = '$telefone1', 
                    telefone2 = '$telefone2'

                    WHERE id = '$id'";
        mysqli_query($connect, $sql)or die(mysqli_error("Erro ao editar o usuario"));
        session_destroy();
        header('Location: ../../index.php?page=home');

    }
?>
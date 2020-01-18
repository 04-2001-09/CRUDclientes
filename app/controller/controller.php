<?php
    session_start();
    require '../class/Usuario.php';
    $action = $_GET['action'];
    
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
    $senha = $_POST['senha'];
    $senhaConfirmar = $_POST['confirmaSenha'];

    if($action == 'delete'){
        $id = $_GET['id'];
        $_SESSION['msgSuccess'] = Usuario::delete(($id-1));
        header('Location: ../../index.php?page=home');
    }
    $resul = Usuario::listaClientes();
    
    
    $erros = [];
    //validação dos dados
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
    if (!$tipoEnd) {
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
    if (!$senha) {
        array_push($erros, "Necessario preencher o campo senha");
    }
    if (!$senhaConfirmar) {
        array_push($erros, "Necessario preencher o campo confirmar senha");
    }
    if ($senhaConfirmar != $senha) {
        array_push($erros, "Senhas não ceencidem");
    }

    $_SESSION['erros'] = $erros;
    //se ouver erros será redirecionado a pagina de cadastro com os respectivos erros
    if (count($erros) > 0) {
        header('Location: ../../index.php?page=cadastrar');
    } else {
        $usuario = new Usuario($nome, $sobrenome,$email,$cep,$tipoEnd,$nomeRua,$numero,$bairro,$telefone1,$telefone2,$senha);
        $msg = $usuario->cadastrar();
        echo $msg;
    }

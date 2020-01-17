<?php
session_start();
if (isset($_SESSION['erros'])) {
    echo "<div id='mensagem'>";
    foreach ($_SESSION['erros'] as $erro) {
        echo "<div class='alert alert-danger'>" .
            $erro
            . "</div>";
    };

    echo "</div>";
    
}
unset($_SESSION['erros']);
if ($_GET['page'] == 'edit') {
    $id = $_GET['id'];
    $dado = $_SESSION['dados'][($id - 1)];
    $mensagem = "Ediçao de Clientes";
    $url = "app/controller/edit.php";
    $textButton = "Editar";
} else {
    $mensagem = "Cadastro de Clientes";
    $url = "app/controller/cadastro.php";
    $textButton = "Cadastrar";
}
?>

<div class="form">
    <form action="<?php echo $url; ?>" method="POST" id="form-cliente">
        <div>
            <h1><b>
                    <center><?php echo $mensagem ?> </center>
                </b></h1>
            <hr>
        </div>
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php if ($dado) echo ($dado['nome']);  ?>" placeholder="Digite o seu nome...">
                <input type="hidden" id="id" name="id" value="<?php if ($dado) echo ($dado['id']);  ?>">
                
            </div>
            <div class="form-group col-md-6">
                <label>Sobrenome:</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?php if ($dado) echo ($dado['sobrenome']);  ?>" placeholder="Digite o seu sobrenome...">

            </div>
        </div>
        <div class="form-group">

            <label>Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php if ($dado) echo ($dado['email']);  ?>" placeholder="Digite o seu email...">
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Cep:</label>
                <input type="text" class="form-control" id="cep" name="cep" value="<?php if ($dado) echo ($dado['cep']);  ?>" placeholder="Digite seu cep..." maxlength="9" minlength="9">

            </div>
            <div class="form-group col-md-4">
                <label>Tipo de Endereço</label>
                <select class="form-control" id="tipoEnd" name="tipoEnd">
                    <option>...</option>
                    <option value="avenida">Avenida</option>
                    <option value="rua">Rua</option>
                    <option value="praca">Praça</option>
                    <option value="quadra">Quadra</option>
                    <option value="estrada">Estrada</option>
                    <option value="alameda">Alameda</option>
                    <option value="ladeira">Ladeira</option>
                    <option value="travessa">Travessa</option>
                    <option value="rodovia">Rodovia</option>
                    <option value="outros">Outros</option>
                </select>

            </div>
            <div class="form-group col-md-4">
                <label>Nome da Rua:</label>
                <input type="text" class="form-control" id="nomeRua" name="nomeRua" value="<?php if ($dado) echo ($dado['nomeRua']);  ?>" placeholder="Digite o nome da rua...">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" value="<?php if ($dado) echo ($dado['numero']);  ?>" placeholder="Digite o numero..." maxlength="">

            </div>
            <div class="form-group col-md-6">
                <label>Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" value="<?php if ($dado) echo ($dado['bairro']);  ?>" placeholder="Digite o bairro...">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Telefone</label>
                <input type="Tel" class="form-control" id="telefone1" name="telefone1" value="<?php if ($dado) echo ($dado['telefone1']);  ?>" placeholder="Digite seu telefone...">

            </div>
            <div class="form-group col-md-6">
                <label>Outro telefone:</label>
                <input type="Tel" class="form-control" id="telefone2" name="telefone2" value="<?php if ($dado) echo ($dado['telefone2']);  ?>" placeholder="Digite outro telefone...">

            </div>
        </div>
        <?php
        if (!$dado) {
        ?>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Senha:</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha...">

                </div>
                <div class="form-group col-md-6">
                    <label>Confirme sua senha:</label>
                    <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" placeholder="Digite o sua senha...">

                </div>
            </div>
        <?php
        }
        ?>
        <div class="form-group">
            <button name="cadastrar" id="cadastrar" class="btn btn-success"><?php echo $textButton; ?></button>
            <button type="reset" name="reset" id="reset" class="btn btn-primary">Limpar</button>
        </div>
    </form>
</div>
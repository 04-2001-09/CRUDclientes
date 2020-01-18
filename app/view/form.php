<?php
//sessão para receber os dados vindos da pagina Controller via sesão
session_start();
require 'app/model/Banco.php';
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
//caso haja um id vindo por meio de urlencoded execute uma consulta no sql para encontrar o usuario que será editado
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql="SELECT * FROM clientes WHERE id = '$id'";
    $query = mysqli_query(Banco::connect(),$sql)or die(mysqli_error("Erro ao buscar o usuario"));
    $dado = mysqli_fetch_array($query);
    $mensagem = "Edição de Clientes" ;
    $action = "edit";
    $url = "app/controller/controller.php?action=".$action."&id=".$id;
} else {
    $mensagem = "Cadastro de Clientes";
    $action="cadastrar";
    $url = "app/controller/controller.php?action=".$action;
}
?>

<div class="form">
    <form action="<?php echo $url;?>" method="POST" id="form-cliente">
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
                <input type="text" class="form-control" id="cep" name="cep" value="<?php if ($dado) echo ($dado['cep']);  ?>" maxlength="9" placeholder="Digite seu cep..." maxlength="9" minlength="9">

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
                <input type="Tel" class="form-control" id="telefone1" name="telefone1" value="<?php if ($dado) echo ($dado['telefone1']);  ?>" maxlength="14" placeholder="Digite seu telefone...">

            </div>
            <div class="form-group col-md-6">
                <label>Outro telefone:</label>
                <input type="Tel" class="form-control" id="telefone2" name="telefone2" value="<?php if ($dado) echo ($dado['telefone2']);  ?>" maxlength="14" placeholder="Digite outro telefone...">

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
            <button name="cadastrar" id="cadastrar" class="btn btn-success">
                Enviar
            </button>
            <button type="reset" name="reset" id="reset" class="btn btn-primary">Limpar</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<script type="text/javascript">
//mascaras de telefone e CEP
    $(document).ready(function(){
      $('#telefone1').mask('(00) 00000-0000');
      });
    $(document).ready(function(){
      $('#telefone2').mask('(00) 00000-0000');
      });
    $(document).ready(function(){
      $('#cep').mask('00000-000');
      });
      $.ajax();
</script>
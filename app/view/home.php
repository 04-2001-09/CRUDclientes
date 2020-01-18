<?php
session_start();
require 'app/model/Banco.php';
//query de seleção das linhas na tabela sql
$sql = "SELECT * FROM clientes WHERE situation = 0";
$query = mysqli_query(Banco::connect(), $sql) or die(mysqli_error("Erro na listagem de clientes"));
if (($_SESSION['msgSuccess'])) {
    echo "<div class='alert alert-success mt-4' role='alert'>" . $_SESSION['msgSuccess'] . "</div>";
}
unset($_SESSION['msgSuccess']);
echo "<div class='row'>";
while ($resul = mysqli_fetch_assoc($query)) {
?>
    <div class="col-sm-6 col-md-4 mt-4">
        <div class="card">
            <div class="card-header">
                ID: <?php echo $resul['id']; ?>
            </div>
            <div class="card-body">
                <h5 class="card-title">
                    Nome: <?php echo $resul['nome'] . " " . $resul['sobrenome']; ?>

                </h5>
                <p class="card-text">
                    E-mail: <?php echo $resul['email']  ?>
                </p>
                <p class="card-text">
                    Tipo do Endereço: <?php echo $resul['tipoEnd']; ?>
                </p>
                <p class="card-text">
                    Nome da Rua: <?php echo $resul['nomeRua']; ?>
                </p>
                <p class="card-text">
                    Numero: <?php echo $resul['numero']; ?>
                </p>
                <p class="card-text">
                    Bairro: <?php echo $resul['bairro']; ?>
                </p>
                <p class="card-text">
                    Telefone 1: <?php echo $resul['telefone1']; ?>
                </p>
                <p class="card-text">
                    Telefone 2: <?php echo $resul['telefone2']; ?>
                </p>
                <a href="./index.php?page=edit&id=<?php echo $resul['id']; ?>">
                    <button class='btn btn-primary'>Editar</button>
                </a>
                <a href="app/controller/controller.php?action=delete&id=<?php echo $resul['id']; ?>">
                    <button class='btn btn-danger'>Deletar</button>
                </a>
            </div>
        </div>
    </div>

<?php
}
?>
<?php
session_start();
require 'app/model/conexao.php';

$sql = "SELECT * FROM clientes WHERE situation = 0";
$query = mysqli_query($connect, $sql) or die(mysqli_error("Erro na listagem de clientes"));
$dados = [];
?>

<div class="form">

    <div class="container-fluid">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tipo Endereco</th>
                    <th scope="col">Nome da Rua</th>
                    <th scope="col">Numero</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Telefone 1</th>
                    <th scope="col">Telefone 2</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    while ($resul = mysqli_fetch_assoc($query)) {
                    ?>
                        <td scope="row"><?php echo $resul['nome']; ?></td>
                        <td>
                            <?php echo $resul['sobrenome']; ?>
                        </td>

                        <td>
                            <?php echo $resul['email']; ?>
                        </td>

                        <td>
                            <?php echo $resul['tipoEnd']; ?>

                        </td>
                        <td>
                            <?php echo $resul['nomeRua']; ?>
                        </td>
                        <td>
                            <?php echo $resul['numero']; ?>
                        </td>
                        <td>
                            <?php echo $resul['bairro']; ?>
                        </td>
                        <td>
                            <?php echo $resul['telefone1']; ?>
                        </td>
                        <td>
                            <?php echo $resul['telefone2']; ?>
                        </td>
                        <td>
                            <a href="index.php?page=edit&id=<?php echo $resul['id']; ?>">
                                <button class='btn btn-primary'>Editar</button>
                            </a>
                        </td>
                        <td>
                            <a href="app/controller/delete.php?id=<?php echo $resul['id']; ?>">
                                <button class='btn btn-danger'>Deletar</button>
                            </a>
                        </td>

                </tr> <?php
                    }
                        ?>
            </tbody>
        </table>
    </div>
</div>

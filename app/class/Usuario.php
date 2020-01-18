<?php
require_once "../model/Banco.php";

//criação da classe para lidar com ações que mechem diretamente com o objeto como cadastro, edição e exclusão
class Usuario
{
    private $nome;
    private $sobrenome;
    private $email;
    private $cep;
    private $tipoEnd;
    private $nomeRua;
    private $numero;
    private $bairro;
    private $telefone1;
    private $telefone2;
    private $senha;

    function __construct($nome, $sobrenome, $email, $cep, $tipoEnd, $nomeRua, $numero, $bairro, $telefone1, $telefone2, $senha)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->email = $email;
        $this->cep = $cep;
        $this->tipoEnd = $tipoEnd;
        $this->nomeRua = $nomeRua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;
        $this->senha = $senha;
    }

    public function __get($valor)
    {
        return $this->$valor;
    }
    public function cadastrar()
    {

        $sql = "INSERT INTO 
        clientes(
            nome,
            sobrenome, 
            email,
            cep,
            tipoEnd, 
            nomeRua, 
            numero, 
            bairro, 
            telefone1, 
            telefone2, 
            senha, 
            situation
            ) 
        VALUES (
            '$this->nome',
            '$this->sobrenome', 
            '$this->email',
            '$this->cep', 
            '$this->tipoEnd', 
            '$this->nomeRua', 
            '$this->numero', 
            '$this->bairro',
            '$this->telefone1',
            '$this->telefone2', 
            '$this->senha',
            0)";
        mysqli_query(Banco::connect(), $sql) or die(mysqli_error("erro ao inserir os dados"));
        return "Usuario cadastrado com sucesso";
    }

    static public function delete($id)
    {
        $sql = "UPDATE clientes SET situation = 1 WHERE id = '$id'";
        mysqli_query(Banco::connect(), $sql) or die(mysqli_error("erro ao inserir os dados"));
        return "Usuario deletado com sucesso";
    }
    public function editar($id)
    {
        $sql = "UPDATE
                    clientes
                 SET
                    nome = '$this->nome',
                    sobrenome = '$this->sobrenome', 
                    email = '$this->email',
                    cep = '$this->cep',
                    tipoEnd = '$this->tipoEnd', 
                    nomeRua = '$this->nomeRua', 
                    numero = '$this->numero', 
                    bairro = '$this->bairro', 
                    telefone1 = '$this->telefone1', 
                    telefone2 = '$this->telefone2'

                    WHERE id = '$id'";
        mysqli_query(Banco::connect(), $sql) or die(mysqli_error("erro ao inserir os dados"));
        return "Usuario editado com sucesso";
    }
}

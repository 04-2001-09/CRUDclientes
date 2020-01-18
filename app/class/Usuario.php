<?php
require_once "../model/Banco.php";


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
    }

    static public function delete($id)
    {
        $sql = "UPDATE clientes SET situation = 1 WHERE id = '$id'";
        mysqli_query(Banco::connect(), $sql) or die(mysqli_error("erro ao inserir os dados"));
    }
    static public function listaClientes()
    {
        $dados = [];
        $sql = "SELECT * FROM clientes WHERE situation = 0";
        $query = mysqli_query(Banco::connect(), $sql) or die(mysqli_error("Erro na listagem de clientes"));
        while ($resul = mysqli_fetch_assoc($query)){
            array_push($dados, $resul);
        } 
        return $dados;

    }
}

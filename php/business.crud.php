<?php
require_once("conexao.php");

// Funções de Criar
function cadastrarServicos($imagem, $titulo, $descricao) 
{
    $con = getConnection();
    $sql = "INSERT INTO servicos (imagem, titulo, descricao) VALUES (:imagem, :titulo, :descricao)";
    $result = $con->prepare($sql);
    $result->bindParam(":imagem", $imagem);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}
function cadastrarPlanos($tipo, $preco, $info1, $info2, $info3, $info4, $info5, $info6, $info7, $info8) 
{
    $con = getConnection();
    $sql = "INSERT INTO planos (tipo, preco, info1, info2, info3, info4, info5, info6, info7, info8) VALUES (:tipo, :preco, :info1, :info2, :info3, :info4, :info5, :info6, :info7, :info8)";
    $result = $con->prepare($sql);
    $result->bindParam(":tipo", $tipo);
    $result->bindParam(":preco", $preco);
    $result->bindParam(":info1", $info1);
    $result->bindParam(":info2", $info2);
    $result->bindParam(":info3", $info3);
    $result->bindParam(":info4", $info4);
    $result->bindParam(":info5", $info5);
    $result->bindParam(":info6", $info6);
    $result->bindParam(":info7", $info7);
    $result->bindParam(":info8", $info8);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Listar
function listaServicos()
{
    $con = getConnection();
    $sql = "SELECT * FROM servicos";
    $result = $con->query($sql);
    $listaServico = array();
    while($servicos = $result->fetch(PDO::FETCH_OBJ))
    {
        array_push($listaServico, $servicos);
    }
    unset($con);
    unset($result);
    return $listaServico;
}
function listaPlanos()
{
    $con = getConnection();
    $sql = "SELECT * FROM planos";
    $result = $con->query($sql);
    $listaPlanos = array();
    while($planos = $result->fetch(PDO::FETCH_OBJ))
    {
        array_push($listaPlanos, $planos);
    }
    unset($con);
    unset($result);
    return $listaPlanos;
}

// Funções de Atualizar
function atualizarServicos($id, $imagem, $titulo, $descricao) 
{
    $con = getConnection();
    $sql = "UPDATE servicos SET imagem = :imagem, titulo =:titulo, descricao =:descricao WHERE id=:id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $result->bindParam(":imagem", $imagem);
    $result->bindParam(":titulo", $titulo);
    $result->bindParam(":descricao", $descricao);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}
function atualizarPlanos($tipo, $preco, $info1, $info2, $info3, $info4, $info5, $info6, $info7, $info8) 
{
    $con = getConnection();
    $sql = "UPDATE planos SET tipo = :tipo, preco = :preco, info1 = :info1, info2 = :info2, info3 = :info3, info4 = :info4, info5 = :info5, info6 = :info6, info7 = :info7, info8 = :info8 WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":tipo", $tipo);
    $result->bindParam(":preco", $preco);
    $result->bindParam(":info1", $info1);
    $result->bindParam(":info2", $info2);
    $result->bindParam(":info3", $info3);
    $result->bindParam(":info4", $info4);
    $result->bindParam(":info5", $info5);
    $result->bindParam(":info6", $info6);
    $result->bindParam(":info7", $info7);
    $result->bindParam(":info8", $info8);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Deletar
function apagarServicos($id) 
{
    $con = getConnection();
    $sql = "DELETE FROM servicos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}
function apagarPlanos($id) 
{
    $con = getConnection();
    $sql = "DELETE FROM planos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    unset($con);
    unset($result);
    if($execute)
        return true;
    return false;
}

// Funções de Localizar
function localizaServicosPeloID($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM servicos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    $servico = $result->fetch(PDO::FETCH_OBJ);
    unset($con);
    unset($result);
    return $servico;
}
function localizaPlanosPeloID($id)
{
    $con = getConnection();
    $sql = "SELECT * FROM planos WHERE id = :id";
    $result = $con->prepare($sql);
    $result->bindParam(":id", $id);
    $execute = $result->execute();
    $plano = $result->fetch(PDO::FETCH_OBJ);
    unset($con);
    unset($result);
    return $plano;
}
<?php 
    require_once('config/config.php');
    session_start();

    $service = new PlanoService();

    $tipo = filter_input(INPUT_POST, 'inputTipo', FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'inputPreco', FILTER_SANITIZE_SPECIAL_CHARS);
    $info1 = filter_input(INPUT_POST, 'inputInfo1', FILTER_SANITIZE_SPECIAL_CHARS);
    $info2 = filter_input(INPUT_POST, 'inputInfo2', FILTER_SANITIZE_SPECIAL_CHARS);
    $info3 = filter_input(INPUT_POST, 'inputInfo3', FILTER_SANITIZE_SPECIAL_CHARS);
    $info4 = filter_input(INPUT_POST, 'inputInfo4', FILTER_SANITIZE_SPECIAL_CHARS);
    $info5 = filter_input(INPUT_POST, 'inputInfo5', FILTER_SANITIZE_SPECIAL_CHARS);
    $info6 = filter_input(INPUT_POST, 'inputInfo6', FILTER_SANITIZE_SPECIAL_CHARS);
    $info7 = filter_input(INPUT_POST, 'inputInfo7', FILTER_SANITIZE_SPECIAL_CHARS);
    $info8 = filter_input(INPUT_POST, 'inputInfo8', FILTER_SANITIZE_SPECIAL_CHARS);
    $categoriaId = filter_input(INPUT_POST, 'inputCategoria', FILTER_SANITIZE_NUMBER_INT);
 
    $planos = new Plano();
    $planos->setTipo($tipo);
    $planos->setPreco($preco);
    $planos->setInfo1($info1);
    $planos->setInfo2($info2);
    $planos->setInfo3($info3);
    $planos->setInfo4($info4);
    $planos->setInfo5($info5);
    $planos->setInfo6($info6);
    $planos->setInfo7($info7);
    $planos->setInfo8($info8);
    $planos->setCategoriaId($categoriaId);

    if($service->cadastrar($planos))
    {
        header('location: ./home');
        exit;
    } else {
        $_SESSION['error'] = 'Ocorreu uma falha ao cadastrar';
        header('location: ./planos');
        exit;
    }
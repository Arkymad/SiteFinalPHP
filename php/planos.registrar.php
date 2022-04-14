<?php
    require_once("business.crud.php");

    $tipo = filter_input(INPUT_POST, 'inputTipo', FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'inputPreco', FILTER_SANITIZE_SPECIAL_CHARS);
    $info1 = filter_input(INPUT_POST, 'inputInfo', FILTER_SANITIZE_SPECIAL_CHARS);
    $info2 = filter_input(INPUT_POST, 'inputInfo2', FILTER_SANITIZE_SPECIAL_CHARS);
    $info3 = filter_input(INPUT_POST, 'inputInfo3', FILTER_SANITIZE_SPECIAL_CHARS);
    $info4 = filter_input(INPUT_POST, 'inputInfo4', FILTER_SANITIZE_SPECIAL_CHARS);
    $info5 = filter_input(INPUT_POST, 'inputInfo5', FILTER_SANITIZE_SPECIAL_CHARS);
    $info6 = filter_input(INPUT_POST, 'inputInfo6', FILTER_SANITIZE_SPECIAL_CHARS);
    $info7 = filter_input(INPUT_POST, 'inputInfo7', FILTER_SANITIZE_SPECIAL_CHARS);
    $info8 = filter_input(INPUT_POST, 'inputInfo8', FILTER_SANITIZE_SPECIAL_CHARS);

    if(cadastrarPlanos($tipo, $preco, $info1, $info2, $info3, $info4, $info5, $info6, $info7, $info8))
    {
        header('Location: ../index.php');
        exit;
    }

    header('Location: planos.form.php?error=true');
    exit;
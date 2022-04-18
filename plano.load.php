<?php
    require_once('config/config.php');
    
    session_start();
    $categoriaService = new CategoriaService();
    $PlanoService = new PlanoService();

    if(isset($_GET['load-categoria'])) {
        $_SESSION['categorias'] = serialize($categoriaService->listar());

        header('location: servico');
        exit;
    }

    if(isset($_GET['load-planos'])) {
        $_SESSION['planos'] = $PlanoService->listar(10);
        header('location: home');
        exit;
    }
<?php
    require_once("business.crud.php");
    
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);    
    if(apagarPlanos($id))
    {
        header('Location: ../index.php');
        exit;
    }
    header('Location: planos.list.php?error=true');
    exit;
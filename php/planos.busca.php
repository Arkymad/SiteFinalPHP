<?php

    include_once("business.crud.php");

    session_start();
    
    if(filter_input(INPUT_GET, 'id') !== null) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['planos_dados'] = localizaPlanosPeloID($id);
    } else {
        $_SESSION['planos_lista'] = listaPlanos();
    }
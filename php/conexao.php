<?php

    define("HOSTNAME", "ec2-44-199-143-43.compute-1.amazonaws.com");
    define("USERNAME", "stoscfnquepbpn");
    define("PASSWORD", "ad76f0773c0535207b1286d21c42b17650aaa080b60572ed588fab600a30e1cd");
    define("SCHEMA", "ddl8ca92v928po");
    define("PORT",5432 );

    function getConnection()
    {
        try
        {
            $key = "strval";
            $con = new PDO("pgsql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)};port={$key(PORT)}", USERNAME, PASSWORD);
            $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $con;
        }
        catch (PDOException $error)
        {
            echo "Erro ao conectar ao banco de dados. Erro: {$error->getMessage()}";
            exit;
        }
    }



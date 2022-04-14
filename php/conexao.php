<?php

    define("HOSTNAME", "ec2-34-194-158-176.compute-1.amazonaws.com");
    define("USERNAME", "ulvnmikmnqnrcx");
    define("PASSWORD", "d97b6f806b4ac787a52317d6d0967cff1d6cb058e3f3e6dff0e96256a3658725");
    define("SCHEMA", "dfrvuif58fqk1u");
    define("PORT", 5432);

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



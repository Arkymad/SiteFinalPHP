<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-44-199-143-43.compute-1.amazonaws.com";
        const USERNAME = "stoscfnquepbpn";
        const PASSWORD = "ad76f0773c0535207b1286d21c42b17650aaa080b60572ed588fab600a30e1cd";
        const SCHEMA = "ddl8ca92v928poB";
        const PORT = 5432;

        private $conn;

        # magic method
        public function __construct() {
            $key = "strval";
            $dsn = "pgsql:host={$key(self::HOSTNAME)};dbname={$key(self::SCHEMA)};port={$key(self::PORT)}";
            $this->conn = new PDO($dsn, self::USERNAME, self::PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }

        public function getConnection() {
            $this->conn->query("SET timezone TO 'America/Sao_Paulo'");
            return $this->conn;
        }
    } 
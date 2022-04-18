<?php
    class Connection extends PDO {

        const HOSTNAME = "ec2-23-20-224-166.compute-1.amazonaws.com";
        const USERNAME = "setwygsljndlfr";
        const PASSWORD = "6cd8cbff03343c152bdb8120c5225cc39e084457d92c106053299e9dec058235";
        const SCHEMA = "d3prke42ebj79m";
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
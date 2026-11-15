<?php
    declare(strict_types = 1);

    class Database {
        private string $host = 'localhost';
        private string $username = 'root';
        private string $password = 'root';
        private string $dbname = 'register';

        public function connect(): PDO {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            return new PDO(
                $dsn,
                $this->username,
                $this->password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]
            ); 
        }
    }
?>
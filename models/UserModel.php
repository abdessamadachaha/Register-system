<?php 
    declare(strict_types = 1);

    class UserModel {
        private PDO $database;

        public function __construct(PDO $database)
        {
            $this->database = $database;
        }

        
    }
?>
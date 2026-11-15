<?php 
    declare(strict_types = 1);

    class UserModel {
        private PDO $database;

        public function __construct(PDO $database)
        {
            $this->database = $database;
        }

        public function create(
            string $fullname,
            string $email,
            string $password,
            string $country
        ): bool {
            $stmt = $this->database->prepare("INSERT INTO users(full_name, email, password, country) VALUES (:fullname, :email, :password, :country)");
            return $stmt->execute([
                "fullname" => $fullname,
                "email" => $email,
                "password" => password_hash($password, PASSWORD_DEFAULT),
                "country" => $country
            ]);
        }

        
    }
?>
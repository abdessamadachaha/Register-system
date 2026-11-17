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

        public function findByEmail(string $email): object | false {    
            $stmt = $this->database->prepare("
                SELECT * FROM users WHERE email = :email
            ");
            $stmt->execute(["email" => $email]);

            return $stmt->fetch();
        }

        public function findById(int $id): object | false {    
            $stmt = $this->database->prepare("
                SELECT * FROM users WHERE id = :id
            ");
            $stmt->execute(["id" => $id]);

            return $stmt->fetch();
        }

        
    }
?>
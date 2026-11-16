<?php 
    declare(strict_types = 1);

    class AuthController {
        private UserModel $user_model;

        public function __construct(UserModel $user_model)
        {
            $this->user_model = $user_model;
        }

        public function showSignup(array $message = []): void {
            require __DIR__. "/../views/auth/signup.php";
        }

        public function store(): void {
            $message = [];
            if (isset($_POST['sign'])) {
                $full_name = trim($_POST['full_name']);
                $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
                $passord = trim($_POST['password']);
                $country = trim($_POST['country']);

                if (!empty($full_name) && !empty($email) && !empty($passord) && !empty($country)) {
                   if (!$this->user_model->findByEmail($email)) {
                         try {
                            $success = $this->user_model->create($full_name, $email, $passord, $country);

                            if ($success) {
                                $message['success'] = true;
                                $message['message'] = "Your account has been created successfully.";
                            }
                        } catch (PDOException $e) {
                            error_log($e->getMessage());
                            die("Please enter a valid email address.");
                        }
                   } else {
                         $message['success'] = false;
                        $message['message'] = 'An account with this email already exists.';
                   }
                } else {
                     $message['success'] = false;
                    $message['message'] = 'All fields should be fill';
                }
            }

            $this->showSignup($message);
        }
    }
?>
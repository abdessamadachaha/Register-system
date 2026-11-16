<?php 
    declare(strict_types = 1);

    require_once __DIR__. "/config/database.php";
    require_once __DIR__. "/models/UserModel.php";
    require_once __DIR__. "/controllers/AuthController.php";

    $db = new Database();
    $userModel = new UserModel($db->connect());
    $authController = new AuthController($userModel);

    $url = $_SERVER['REQUEST_URI'];

    $routes = [
        "/register/Register-system/index.php?action=signup" => [$authController, "showSignup"],
        "/register/Register-system/index.php?action=store" => [$authController, "store"],
        "/register/Register-system/index.php?action=login" => [$authController, "login"],

    ];

    if (array_key_exists($url, $routes)) {
        $routes[$url]();
    }

?>
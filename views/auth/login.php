<?php 
    ob_start();
?>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            padding: 40px 16px;
            position: relative;
        }
        form {
            background: #fff;
            padding: 24px;
            width: 100%;
            max-width: 360px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,.1);
        }
        h2 { margin-top: 0; text-align: center; }
        label { display: block; margin-top: 14px; font-weight: bold; }
        input {
            width: 100%;
            padding: 9px;
            margin-top: 4px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background: #2d6cdf;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .have {
            margin-top: 12px;
            text-align: center;

        }

        .have span a {
            color: blue;
            text-decoration: none;
        }
     
        button:hover { background: #1f55b5; }
    </style>
  
    <form method="POST" action="/register/Register-system/index.php?action=login">
    <h2>Login</h2>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    

    <button type="submit" name="login">Login</button>

    <div class="have">
        I don't have an account yet
        <span>
            <a href="/register/Register-system/index.php?action=signup">SignUp</a>
        </span>
    </div>
</form>

<?php 
    $title = "Register";
    $content = ob_get_clean();
    require __DIR__. "/../layer.php";
?>
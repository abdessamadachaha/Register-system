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
        input, select {
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
        .message {
            width: max-content;
            color: whitesmoke;
            font-size: 17px;
            padding: 15px;
            position: absolute;
            left: 20px;
            top: 30px;
        }
        button:hover { background: #1f55b5; }

        .have {
            margin-top: 12px;
            text-align: center;

        }

        .have span a {
            color: blue;
            text-decoration: none;
        }
    </style>
    <?php 
        if (!empty($message)) {
            ?>
            <div class="message" style="background-color: <?= $message['success'] ? 'green' : 'red' ?>">
                <?=  htmlspecialchars($message['message'], ENT_QUOTES, 'UTF-8') ?>
            </div>
            <?php
        }
    ?>
    <form method="POST" action="/register/Register-system/index.php?action=store">
    <h2>Sign Up</h2>

    <label for="full_name">Full Name</label>
    <input type="text" id="full_name" name="full_name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>

    <label for="country">Country</label>
    <select id="country" name="country" required>
        <option value="">-- Select --</option>
        <option>Morocco</option>
        <option>France</option>
        <option>Spain</option>
        <option>USA</option>
        <option>Canada</option>
    </select>

    <button type="submit" name="sign">Sign Up</button>
    <div class="have">
        I already have an account
        <span>
            <a href="/register/Register-system/index.php?action=login">login</a>
        </span>
    </div>
</form>

<?php 
    $title = "SignUp";
    $content = ob_get_clean();
    require __DIR__. "/../layer.php";
?>
<?php 
    ob_start();
    

?>

<h1>
    Welcome, Mr.
    <?= htmlspecialchars($user->full_name, ENT_QUOTES, 'UTF-8') ?>
</h1>

<p>
    Email: <?= htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8') ?>
</p>

<p>
    Country: <?= htmlspecialchars($user->country, ENT_QUOTES, 'UTF-8') ?>
</p>

<?php 
    $title = "Dashbord";
    $content = ob_get_clean();
    require __DIR__. "/layer.php";
?>
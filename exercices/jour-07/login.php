<?php
session_start();


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if ($username === 'admin' && $password === '1234') {
    $_SESSION['user'] = $username;
    header('location: dashboard.php');
    exit;
}else{
    $error ['username']= "identifiants incorrects";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>

    <form action="login.php" method="post">
        <div>
            <label for="username"></label>
        <input type="username" name="username" placeholder="Nom d'utilisateur">
        <?php if (isset($error['user'])): ?>
            <div class="error" style="color:violet"><?= $error ['username'] ?></div>
        <?php endif;
        ?>
        </div>
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Se connecter</button>
    </form>
</body>

</html>
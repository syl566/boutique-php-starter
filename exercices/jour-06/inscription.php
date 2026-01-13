<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>

    <?php
    //inscription.php

    $error = [];
    $username = $email = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //validation des données
        $username = ($_POST["username"]);  // garder les valeurs en cas d'erreur formulaire avec pré-remplissage
        $email = ($_POST["email"]);
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
    }

    if (empty($username)) {  //vérifie que ce n'est pas vide
        $error['username'] = "Le nom de l'utilisateur est requis";
    } elseif (strlen($username) < 3 || strlen($username) > 20) {   //vérifie le format du nom  
        $error['username'] = "Le nom d'utilisateur doit contenir entre 3 et 20 caractères";
    } elseif (!ctype_alnum($username)) {
        $error['username'] = "Le nom d'utilisateur doit être alphanumérique";
    }


    $email = "email@emple.fr";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {         //vérifie le format de l'email
        $error['email'] = "Email invalide";
    }

    if (strlen($password) < 8) {   //vérifie le format du mot de passe
        $error['password'] = "Le mot de passe doit contenir au moins 8 caractères.";
    }

    if ($password !== $confirm_password) {  //vérifie la confirmation du mot de passe
        $error['confirm_password'] = "Les mots de passe ne correspondent pas";
    }
    
    ?>
    <form action="inscription.php" method="post">

        <div>
            <label for="username">Nom</label><br>
            <input type="username" id="username" name="username" value="<?= htmlspecialchars($username ?? '') ?>">
            <?php if (isset($error['username'])): ?>
                <div class="error" style="color:violet"><?= $error['username'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="email"> Email</label><br>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>">
            <?php if (isset($error['email'])): ?>
                <div class="error" style="color:violet"><?= $error['email'] ?></div>
            <?php endif; ?>

        </div>
        <div>
            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password">
            <?php if (isset($error['password'])): ?>
                <div class="error" style="color:violet"><?= $error['password'] ?></div>
            <?php endif; ?>
        </div>
        <div>
            <label for="confirm_password">Confirmation</label><br>
            <input type="confirm_password" id="confirm_password" name="confirm_password">
            <?php if (isset($error['confirm_password'])): ?>
                <div class="error" style="color:violet"><?= $error['confirm_password'] ?></div>
            <?php endif; ?>
        </div>

        <button type="submit">Connexion</button>
        </ul>
    </form>


</body>

</html>
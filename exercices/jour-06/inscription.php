<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <form action="inscription.php" method="post">
        <ul>
            <li>
                <label for="username">Nom</label><br>
                <input type="username" id="username" name="username" required>
            </li>
            <li>
                <label for="email"> Email</label><br>
                <input type="email" id="email" name="email">
            </li>
            <li>
                <label for="password">Mot de passe</label><br>
                <input type="password" id="password" name="password">
            </li>
            <li>
                <label for="password">Confirmation</label><br>
                <input type="password" id="password" name="password">
            </li>
            <button type="submit">Connexion</button>
        </ul>
    </form>
    <?php
    if (preg_match("a-zA-Z\u00C0-\u024F\u1E00-\u1EFF\u3040-\u309F\u3400-\u4DBF\u4E00-\u9FFF\u2B740–\u2B81F0-9_\\.", $matches)) {
        echo "$username";
    } else {
        echo "le nom est valide";
    }
    //vérifie que ce n'est pas vide
    if (empty($email . $username . $password)) {
        $error = "Remplir les champs est requis";
    }
    //vérifie le format

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide";
    }
    

    ?>
</body>

</html>
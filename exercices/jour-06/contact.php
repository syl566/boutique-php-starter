<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>

<body>

    <form action="contact.php" method="post">
        <ul>
            <li>
                <label for="name">Nom</label><br>
                <input type="name" id="name" name="name" required>
            </li>
            <li>
                <label for="email"> Email</label><br>
                <input type="email" id="email" name="email">
            </li>
            <li>
                <label for="message">Laissez un message ?</label><br>
                <textarea id="message" name="message" row="10" cols=" 24" required></textarea>
            </li>
            <button type="submit">Connexion</button>
        </ul>
    </form>
    <?php
    //contact.php
    // La variable globale $_POST  donne accès aux données envoyées avec la méthode POST par leur nom
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_Post["message"]);

    echo '' . $name, '' . $email, '' . $message;

    //validation des données
    $name = $_POST["name"] ?? "";  // garder les valeurs en cas d'erreur formulaire avec pré-remplissage
    $email = $_POST["email"] ?? "";
    $message = $_POST["message"] ?? "";

    //vérifie que ce n'est pas vide
    if (empty($email . $name . $message)) {
        $error = "Remplir les champs est requis";
    }

    // Vérifier un nombre
    if (strlen($message) <= 10) {
        $error = "Le message doit contenir au moins 10 caractères";
    }
    //vérifie le format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide";
    }
    ?>
</body>

</html>
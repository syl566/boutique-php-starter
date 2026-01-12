<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <?php
    $name = $_GET["name"];
    echo 'Bonjour ' . htmlspecialchars($_GET["name"]) .  ',  vous avez ' . htmlspecialchars($_GET["age"]) . ' ans  !  <br>';

    //Affiche "Bonjour [name] !" ou "Bonjour visiteur !

    if ($_GET["name"]) {
        echo "Bonjour"($_GET["name"]);
    } else {
        echo 'Bonjour visiteur';
    }
    ?>
</body>

</html
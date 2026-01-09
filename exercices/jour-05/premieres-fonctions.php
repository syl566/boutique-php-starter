<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <?php
    function greet()
    {
        echo "Bienvenue sur la boutique!";
    }
    //appel de la fonction
    greet(); //affiche : Bienvenus sur la boutique!
    ?>
    <?php
    function greetClient($name)
    {
        echo "Bonjour $name !";
    }
    // appel de la fonction
    greetClient("marie"); // affiche marie!
    greetClient("Paul");
    ?>
</body>

</html>
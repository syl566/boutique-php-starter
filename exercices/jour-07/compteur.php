<?php
session_start(); // TOUJOURS en première ligne
$visit = $_SESSION["visits"] ?? 0;
$visit++;

if (isset($_SESSION["visits"])) {
    $_SESSION["visits"] = $visit;
    ($visit > 10) ? $_SESSION["visits"] = 0 : null;
} else {
    return false;
}

if (isset($_GET["reset"])) {
    $_SESSION["visits"] = 0;
}
//Que se passe-t-il si tu ouvres la page dans un autre navigateur ? cela fonctionne 
// Que se passe-t-il si tu fermes et rouvres ton navigateur ? il commence à 1 si le début est a zéro

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <p>Vous avez visité cette page <?= $_SESSION["visits"]; ?> fois.</p>
    <form>
        <input type="button" onclick="location.href = 'http://localhost:8000/compteur.php';" value="compteur" />
        <input type="button" onclick="location.href = 'http://localhost:8000/compteur.php?reset=0';" value="réinitialiser" />
    </form>


</body>

</html>
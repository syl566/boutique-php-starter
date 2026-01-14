<?php
$name = "parapluie";
$price = 29.99;
$stock = 150;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name ?></title>
</head>

<body>
    <h1><?= $name ?></h1>
    <p>Prix : <?= $price ?> €</p>
    <span><?= $stock > 0 ? "En stock" : "Rupture" ?></span>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>

<body>
    <?php
    $id = $_GET["id"];
    $products = [
        1 => ["id" => "T-shirt", "price" => 29.99],
        2 => ["id" => "Jean", "price" => 79.99],
        3 => ["id" =>  "Robe", "price" => 19.99],
        4 => ["id" => "Veste", "price" => 89.99],
        5 => ["id" => "Jupe", "price" => 19.99],
    ];
    if (isset($products[$id])) {
        $product = $products[$id];
        echo 'Produit: ' . htmlspecialchars($product["id"]) . '<br>'; //http://localhost:8000/produit.php?id=2  affiche le produit
    } else { 
        echo 'Produit non trouvé.'; //http://localhost:8000/produit.php? affiche Produit non trouvé
    }

    ?>
</body>

</html>
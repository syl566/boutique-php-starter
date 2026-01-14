<?php

//Crée une fiche produit complète 
$name = "parapluie";
$description = "Un parapluie solide et élégant pour vous protéger de la pluie.";    
$prixHT = 29.99;
$tauxTVA = 20; // en pourcentage
$stock = 150;

//Calcul automatique du prix TTC
$prixTTC = $prixHT * (1 + $tauxTVA / 100);

// Affichage formaté (2 décimales pour les prix)
echo number_format($prixTTC, 2, ',', ' ');
?>
<!DOCTYPE html>     
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche Produit - <?= htmlspecialchars($name) ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .product { border: 1px solid #ccc; padding: 15px; max-width: 400px; }
        .price { color: green; font-weight: bold; }
        .stock { color: blue; }
    </style>

</head>
<body>
    <div class="product">
        <h1><?= htmlspecialchars($name) ?></h1>
        <p><?= htmlspecialchars($description) ?></p>
        <p class="price">Prix TTC : <?= number_format($prixTTC, 2, ',', ' ') ?> €</p>
        <p class="stock">Stock disponible : <?= $stock ?></p>
    </div>      
</body>
</html> 

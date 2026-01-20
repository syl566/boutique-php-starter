<?php
//créer un tableau de 10 produits avec des stocks variés (certains en rupture de stock)
$tabs = [
    ["nom" => "veste", "price" => 100, "stock" => 5],
    ["nom" => "chaussures", "price" => 50, "stock" => 0],
    ["nom" => "casquette", "price" => 20, "stock" => 12],
    ["nom" => "gants", "price" => 7, "stock" => 0],
    ["nom" => "manteau", "price" => 150, "stock" => 8],
    ["nom" => "lunettes", "price" => 50, "stock" => 0],
    ["nom" => "blouson", "price" => 100, "stock" => 15],
    ["nom" => "bottes", "price" => 25, "stock" => 0],
    ["nom" => "bonnet", "price" => 20, "stock" => 3],
    ["nom" => "sac à dos", "price" => 60, "stock" => 0]
];
//parcours le tableau et utilise continu

foreach ($tabs as $produit) {
    if ($produit["stock"] == 0) {
        continue; //passer au produit suivant si le stock est à 0
    }
    echo "Le " . $produit["nom"] . " est en stock avec " . $produit["stock"] . " disponibles.<br>";
}
//utilise break pour arréter quand tu trouves un produit > 100 euros
foreach ($tabs as $produit) {
    if ($produit["price"] > 100) {
        echo "Produit trouvé avec un prix supérieur à 100 euros : " . $produit["nom"] . " à " . $produit["price"] . " euros.<br>";
        break; //arrêter la boucle dès qu'un produit > 100 euros est trouvé
    }
}
foreach ($tabs as $produit) {
    if ($produit["price"] < 100){
        echo "Le " . $produit["nom"] . " à ". $produit["price"] . " euros.<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>

</body>

</html>
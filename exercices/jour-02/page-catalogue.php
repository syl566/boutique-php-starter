<?php
// starter-project/public/catalogue.php
require_once __DIR__ . '/../app/data.php';
// $products est maintenant disponible
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
<?php    
$product = ["name" => "T-shirt", "price" => 19.99, "stock" => "10"];    
["name" => "Veste", "price" => 150, "stock" => "10"];
["name" => "Pull", "price" => 35, "stock" => "15"];
["name" => "Jean", "price" => 40 , "stock" => "3"];
["name" => "Robe", "price" => 25 , "stock" => "9"];
["name" => "maillot de bain", "price" => 25 , "stock" => "16"];
?>  

   <div class="produit">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div> 
<div class="produit">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div> 
<div class="produit">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div> 
<div class="produit">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div> 
<div class="produit">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div> 
<div class="produit">
    <h2><?= $products[0]["name"] ?></h2>
    <p class="prix"><?= $products[0]["price"] ?> €</p>
    <p class="stock">Stock : <?= $products[0]["stock"] ?></p>
</div> 


</body>
</html>
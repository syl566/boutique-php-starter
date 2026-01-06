<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>

<?php
$product = [
    "name" => "Tennis",
    "description" => "Chaussures de sport pour le tennis",
    "price" => 59.99,
    "stock" => 10,
    "category" => "Sport",
    "brand" => "Nike",
];

$product["dateAdded"] = date("Y-m-d");
echo $product["dateAdded"];
$product ["price"] = 10;
echo $product;
?>
  <h2> produit:<?php echo $product["name"]; ?></h2>  
    <p>Description: <?php echo $product["description"]; ?></p>
    <p>Prix: <?php echo $product["price"]; ?> €</p>
    <p>Stock disponible: <?php echo $product["stock"]; ?></p>
    <p>Catégorie: <?php echo $product["category"]; ?></p>
    <p>Marque: <?php echo $product["brand"]; ?></p>

   
</body>
</html>


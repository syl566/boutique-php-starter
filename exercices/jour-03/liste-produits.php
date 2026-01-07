<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
  <?php  
  $products = [
["name" => "T-shirt", "price" => 19.99, "stock" => "10"],
["name" => "Pull", "price" => 35, "stock" => "15"],
["name" => "Jean", "price" => 40 , "stock" => "3"],
["name" => "Robe", "price" => 25 , "stock" => "9"],
["name" => "Robe2", "price" => 25 , "stock" => "16"],
  ];
?>
<?php foreach ($products as $product):?>
    <div class="produit">
  <h2> produit:<?php echo $product["name"]; ?></h2>  
     <p>Prix: <?php echo $product["price"]; ?> €</p>
    <p>Stock disponible: <?php echo $product["stock"]; ?></p>
</div>
<?php endforeach;
echo $product["name"].":".$product["stock"].":".$product["price"]. "€<br>";
 ?>
</body>
</html>
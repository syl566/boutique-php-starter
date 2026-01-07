<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php
    $products = [];
    
    for ($i= 1; $i <=10;$i++) {
        $nom = "Produit" .$produit;
        $price = rand(10, 100); // prix aléatoire entre 10 et 100
        echo $nom . " Prix : " . $price. " Stock : " . $Stock . "<br>";
        $Stock = rand (0, 50); // stock aléatoire entre 0 et 50    

        var_dump($i);   
       
}

?>
<?php
$products =["nom" => "Produit: ", "price" => "prix : ", "Stock" => "Stock disponible"];

foreach ($products as $product):?>
    <div class="Produit">
  <h2><?= $nom;?></h2>  
  <p><?= "Prix :" .$price = rand(10, 100);?> €</p>
    <p><?= "Stock disponible :" .$Stock = rand(0, 50); ?></p>
</div>
<?php endforeach;?>


</body>
</html>
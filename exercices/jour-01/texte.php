<?php 
$brand = "Nike";
$model = "Air Max";
//Avec concaténation (.)
echo "Chaussures " . $brand . " modèle " . $model . "\n <br>";
//Avec interpolation (")   
echo "Chaussures $brand modèle $model\n <br>";
//Avec sprintf()
echo sprintf("Chaussures %s modèle %s\n <br>", $brand, $model);
 ?> 
 <?php
$price = 99.99;
echo "Prix : $price €<br>";  // Que s'affiche-t-il ? le prix 
echo 'Prix : $price €';  // Et là ? ça affiche 'Prix : $price
 ?>
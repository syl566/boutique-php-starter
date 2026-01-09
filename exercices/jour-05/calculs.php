<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>

<?php

function calculateVAT($priceExcludingTax, $rate ){         //calcul montant TVA
return $includingTax = $priceExcludingTax * ($rate /100); //return renvoie une valeur au code appelant (au lieu de l'afficher) 
}  
$price = calculateVat(100, 20);
echo "Le montant de la tva est de $price %<br>"; 

$price = 100;                                   // prix HT
echo "Le prix hors taxe est de $price € <br>";

function calculateIncludingTax($priceExcludingTax, $rate) {  // calcul prix TTC
return $includingTax = $priceExcludingTax + $rate;
}
$price = calculateIncludingTax (100,20);
echo "Le prix TTC est de $price €<br>";

$remise = 10;                                       // remise
echo "La remise est de $remise % <br>";

function calculateDiscount($price, $percentage) {     //calcul prix remisé
return $total = $price * (1 - $percentage / 100);
}
$total = calculateDiscount (120,10);
echo "Le prix total après remise $total € <br>";


?>

</body>
</html>
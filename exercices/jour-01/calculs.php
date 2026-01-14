<?php

// Déclaration des variables
$priceExcludingTax = 100;
$vat = 20; // en pourcentage
$quantity = 3;

// Calcul du montant de la TVA
$vatAmount = $priceExcludingTax * ($vat / 100);

// Calcul du prix TTC unitaire
$priceIncludingTax = $priceExcludingTax + $vatAmount;

// Calcul du total pour la quantité commandée
$totalPrice = $priceIncludingTax * $quantity;

// Affichage des résultats
echo "Montant de la TVA : $vatAmount €<br>";
echo "Prix TTC unitaire : $priceIncludingTax €<br>";
echo "Total pour $quantity articles : $totalPrice €";

?>
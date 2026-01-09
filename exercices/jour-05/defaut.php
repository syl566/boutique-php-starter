<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>

<?php
function formatPrice($amount, $currency = " €", $decimals = 2){
return number_format($amount, $decimals) . " " . $currency;
}
$note = formatPrice (99.999);  // affiche le prix formaté 100.00 €
echo "Le prix formaté $note <br>";

$note = formatPrice (99.999, "$"); // affiche le prix formaté 100.00 $
echo "Le prix formaté $note <br>";
 
$note = formatPrice (99.999, "€", 0); // affiche le prix formaté 100 €
echo "Le prix formaté $note <br>";
?> 

</body>
</html>
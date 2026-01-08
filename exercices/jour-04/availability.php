<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>

<?php
$stock = 2;
$active = true;
 
if ($stock >0 && $active == true) {
echo "in stock";
} 
elseif ($stock == 0 || !$active ) {
echo "out of stock";
} 
else {
};

echo"<br>";
var_dump($stock == $active);  //Un produit est "disponible" si : Stock > 0 ET actif = true

?>

<?php

echo"<br>";
$today = date ("y-m-d");
$promoEnDate = "2024-12-31";
if ($today < $promoEnDate) {
echo "on sale";
} else {
echo "not on sale";
}

?>  

</body>
</html>
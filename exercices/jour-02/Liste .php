<?php
$groceries = ["chocolat" , "pâtes" ,"lait" ,"moutarde","fromage"];
echo $groceries [0]; // affiche "chocolat"
echo $groceries [1]; // affiche "pâtes"
echo $groceries [2]; // affiche "lait"
echo $groceries [3]; // affiche "moutarde"
echo $groceries [4]; // affiche "fromage"

var_dump($groceries);
var_dump(count($groceries));
array_push($groceries, "huile d'olive", "jambon");//ajoute 2 nouveaux article à la fin du tableau
print_r($groceries);
unset($groceries[2]);//supprime l'article à l'index 2
print_r($groceries);
?>

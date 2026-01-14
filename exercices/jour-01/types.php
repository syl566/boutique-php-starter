<?php
$a = "5";
$b = 3;
$c = $a + $b;

var_dump($a);
var_dump($b);
var_dump($c);
?>

<?php
$price = "29.99€";
$result = $price + 10;
var_dump($result);

//Que se passe-t-il quand PHP additionne un string et un int ?
// ça affiche int (8), ça les adittionne
//Pourquoi le deuxième exemple pose problème ?
// parce qu'il y a un nombre a virgule
?>

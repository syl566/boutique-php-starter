<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php
for($i =0; $i<=10; $i++){  // affiche les nombres de 1 à 10
    echo "ton numéro $i <br>";
}
 ?>
 <br>
 <?php
for ($i =2; $i<=20; $i=$i+2) {  // affiche les nombres paires de 2 à 20
    echo "ton numéro $i <br>";
}   
?>
<br>
<?php
$counter = 10;
while ($counter >=0){     //affiche le compte à rebours
echo "compteur : $counter <br>";
$counter--;
}
?>
<br>
<?php
for ($i =1;$i<=10;$i++){  // affiche la table de multiplication
        echo "multiplication de $j <br>";
    $j = 7;
    echo $i.' x '.$j.' = '.$i*$j.'<br>';
}
?>
   
</body>
</html>
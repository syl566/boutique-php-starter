<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
$a = 0;
$b = "";
$c = null;
$d = false;
$e = "0";
var_dump($a == $b); //false
var_dump ($a == $c); // true
var_dump ($a == $d); // true
var_dump ($a == $e); // true
echo"<br>";
var_dump ($a === $b);// false
var_dump ($a ===$c);// false
var_dump ($a === $d);// false
var_dump ($a === $e);// false
    ?>
    </body>
</html>
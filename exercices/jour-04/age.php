<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    $age = 25;
    if ($age < 18) {
    echo "minor";
} elseif ($age >18 && $age < 26) {
    echo "Young adult";
} elseif ($age >=26 && $age <= 64) {
    echo "Adult";}
    else {
    echo "Senior";
}
    ?>

</body>
</html>
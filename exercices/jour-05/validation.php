<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <?php
    function isInStock($stock)
    {
        if ($stock > 0) {
            return "true";
        } else {
            return "false";
        }
    }
    $stock = isInStock(5);
    echo " le stock est $stock <br>";

    function isOnSale($discount)
    {
        if ($discount > 0) {
            return "true";
        } else {
            return "false";
        }
    }
    $discount = isOnSale(0);
    echo "le destockage est $discount <br>";


    function isNew($dateAdded)
    {
        $daysSince = (time() - strtotime($dateAdded)) / 86400;
        if ($daysSince < 30) {
            return "true";
        } else {
            return "false";
        }
    }

    $dateAdded = "2025-12-15";
    echo "C'est une  nouveauté " . isNew($dateAdded);
    echo "<br>";

    function canOrder($stock, $quantity)
    {
        if ($stock >= $quantity) {
            return "true";
        } else {
            return "false";
        }
    }
    $stock = canOrder(5, 5);
    echo " il y a du stock  $stock";
    ?>
</body>

</html>
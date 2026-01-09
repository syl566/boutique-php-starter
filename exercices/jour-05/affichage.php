<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie 5</title>
</head>

<body>
    <?php
    function displayBadge($text, $color)
    {
        return  "<span class='badge' style='background: $color'>$text</span> ";
    }
    $paragraphe = displayBadge("Bienvenue sur le site", "red");
    echo "$paragraphe<br>";

    function displayPrice($price, $discount = 0)
    {
        if ($discount > 0) {
            $finalPrice = $price * (1 - $discount / 100);
            return "<span id='price_display' style='color: red; text-decoration: line-through;'>$price €</span>
              <span id='price_display' style='color: green;'> $finalPrice €</span>";
        } else {
            return "<span id='price_display'>$price €</span>";
        }
    }
    $display = displayPrice(100, 10);
    echo $display;

    function displayStock($quantity)
    {
        
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <?php
        $category = ["name" => "T-shirt", "price" => 40, "stock" => 0, "onsale" => true];
          ?>
         <span class="<?= $category["stock"] > 0 ? 'en-stock' : 'rupture' ?>">
    <?= $category["stock"] > 0 ? 'Disponible' : 'Indisponible' ?>
</span>
<span class="<?= $category["onsale"] ? '🔥 PROMO' : 'price' ?>">
    <?= $category["onsale"] > 30 ? 'True' : 'false' ?>
</span>
<div class="product <?= $category["onsale"] ? 'promo' : '' ?>">
    <h3><?= $category["name"] ?> <?= $category["onsale"] ? "🔥 PROMO" : "" ?></h3>
</div>
</body>
</html>
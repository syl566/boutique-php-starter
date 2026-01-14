<?php
// crée un tableau de produits 
$catalogs = [
    ["name" => "chemise", "price" => 25, "category" => "vetements", "inStock" => "true"],
    ["name" => "tee-shirt", "price" => 15, "category" => "vetements", "inStock" => "true"],
    ["name" => "pantalon", "price" => 29.99, "category" => "vetements", "inStock" => "true"],
    ["name" => "chaussures", "price" => 50, "category" => "accessoires", "inStock" => "true"],
    ["name" => "casquette", "price" => 20, "category" => "accessoires", "inStock" => "true"],
    ["name" => "veste", "price" => 59.99, "category" => "vetements", "inStock" => "true"],
    ["name" => "jupe", "price" => 25, "category" => "vetements", "inStock" => "false"],
    ["name" => "manteau", "price" => 80, "category" => "vetements", "inStock" => "true"],
    ["name" => "pull", "price" => 35, "category" => "vetements", "inStock" => "false"],
    ["name" => "sweatshirt", "price" => 45, "category" => "vetements", "inStock" => "true"],
    ["name" => "noeud-papillon", "price" => 9.99, "category" => "accessoires", "inStock" => "true"],
    ["name" => "cravate", "price" => 9.99, "category" => "accessoires", "inStock" => true],
    ["name" => "chapeau", "price" => 30, "category" => "accessoires", "inStock" => "false"],
    ["name" => "chaussettes", "price" => 7.99, "category" => "accessoires", "inStock" => "true"],
    ["name" => "collant", "price" => 10, "category" => "accessoires", "inStock" => "true"],
];
$search = $_GET['q'] ?? '';
$resultats = array_filter($catalogs, function ($p) use ($search) { // filtrage
    if ($search !== '' && stripos($p["name"], $search) !== false) {
        return true;
    }
    return false;
});
$categories = $_GET["category"] ?? [];
$resultats = array_filter($resultats, function ($p) use ($categories) {
    if (empty($categories) || in_array($p["category"], (array)$categories)) {
        return true;
    }
    return false;
});
$priceMax = $_GET["price_max"] ?? PHP_INT_MAX;
$resultats = array_filter($resultats, function ($p) use ($priceMin, $priceMax) {
    if ($p["price"] >= $priceMin && $p["price"] <= $priceMax) {
        return true;
    }
    return false;
});

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>

<body>

    <form action="catalogue-filtre.php" method="get">

        <div>
            <label for="site-search">Produit:</label>
            <input type="search" id="site-search" name="q" />
        </div>
        <br>
        <div>
            <label for="site-search">Catégorie:</label>
            <select id="select" name="category">
                <option value="">Toutes les catégories</option>
                <option value="vetements">Vêtements</option>
                <option value="accessoires">Accessoires</option>
            </select>
        </div>
        <br>
        <div>
            <label for="site-search">En stock:</label>
            <input type="checkbox" id="inStock" name="inStock" />
        </div>
        <br>
        <div>
            <label for="site-search">prix max</label>
            <input type="number" id="input_number" name="price_max" />
        </div>
        <br>

        <div class="produit">

            <?php foreach ($resultats as $catalogs) : ?>
                <div class="produit-item">
                    <h3><?= ($catalogs["name"]) ?></h3>
                    <p>Prix: <?= ($catalogs["price"]) ?>€</p>
                    <p>Catégorie: <?= ($catalogs["category"]) ?></p>
                    <p>inStock: <?= ($catalogs["inStock"]) ? "En stock" : "Rupture de stock" ?></p>
                </div>

            <?php endforeach; ?>
            <?php if (empty($resultats)) : ?>
                <p>Aucun produit trouvé</p>
            <?php endif; ?>
        </div>


        <button type="submit">Lancer la recherche</button>
    </form>

</body>

</html>
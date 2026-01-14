<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie 5</title>
</head>

<body>
    <?php
    // crée un tableau de 10 produits
    $produits = ["Assiette", "Verre", "saladier",  "fourchette", "Couteau", "Saucier", "Carafe", "Bol", "Mug", "Tasse"];

    $error = [];
    $produit = "";
    // initialisation de la variable de recherche
    if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
        if (!filter_var_array($_GET, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)) {
            $error['produit'] = "Caractères invalides dans la recherche";
        } else {
            $produit = $_GET['q'] ?? ''; // récupration des filtres de recherche
            $produit = trim($produit); // Supprimer les espaces inutiles
        }
        if (empty($produit)) {
            $error['produit'] = "Le champ de recherche ne peut pas être vide";
        } elseif (strlen($produit) < 3) {
            $error['produit'] = "Le terme de recherche doit contenir au moins 3 caractères";
        } else {
            // Recherche du produit dans le tableau
            $resultats = array_filter($produits, function ($item) use ($produit) { // filtrage 
                return stripos($item, $produit) !== false;
            });
        }
        if (!empty($resultats)) {
            echo "Produits trouvés : " . implode(", ", $resultats);
        } else {
            echo "Aucun produit trouvé pour la recherche : " . htmlspecialchars($produit);
        }
    }

    ?>
    <form action="recherche.php" method="get">

        <div>
            <label for="site-search">Recherche le produit:</label>
            <input type="search" id="site-search" name="q" />
            <?php if (isset($error['produit'])): ?>
                <div class="error" style="color:violet"><?= $error['produit'] ?></div>
            <?php endif;
            ?>
        </div>
        <button type="submit">Recherche</button>
    </form>
</body>

</html>
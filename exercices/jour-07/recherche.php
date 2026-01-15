<?php
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8mb4",
        "dev",
        "dev",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "✅ Connexion réussie !";
} catch (PDOException $e) {
    echo "❌ Erreur : " . $e->getMessage();
}

$search = $_GET["q"] ?? "";
$stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE  ?");
$stmt->execute(['%' . $search . '%']);
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// affiche le résultat
if (empty($products)) {
        $error['produit'] = "Aucun produit trouvé.";
}
foreach ($products as $product) : ?>
    <div>
        <p><?= ($product["name"]) ?></p>
      
<?php endforeach;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
    <form action="recherche.php" method="get">

        <div>
            <label for="site-search">Le produit:</label>
            <input type="search" id="site-search" name="q" />
            <?php if (isset($error['produit'])): ?>
                <div class="error" style="color:violet"><?= $error['produit'] ?></div>
            <?php endif;
            ?>
        </div>
        <br>
        <button type="submit">Lancer la recherche</button>
    </form>
</body>
</html>
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

// SELECT avec paramètre
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Quelle différence entre fetch() et fetchAll() ?
//fetch retourne ,une seule ligne d'un tableau alors que fetchAll retourne toutes les lignes d'un tableau

//Que signifie PDO::FETCH_ASSOC ? PDO::FETCH_ASSOC retourne un tableau assiociatif
//Les tableaux associatifs ressemblent beaucoup aux tableaux classiques, à ceci près que leurs indices sont en réalité des chaînes de caractères appelées clés


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $product) : ?>
                <tr>
                    <td><?= ($product["name"]) ?></td>
                    <td><?= ($product["price"]) ?>€</td>
                    <td><?= ($product["stock"]) ?></td>
                </tr>
                </div>
            <?php endforeach; ?>

        </tbody>
    </table>

</body>

</html>
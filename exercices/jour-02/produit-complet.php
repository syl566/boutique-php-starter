<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6</title>
</head>
<body>
 <?php
$product = [
"name" => "planète", "description" => "sphère", "price" => "100",
"images" => ["https://images.unsplash.com/photo-1614313913007-2b4ae8ce32d6?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://images.unsplash.com/photo-1481819613568-3701cbc70156?q=80&w=880&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D","https://unsplash.com/fr/photos/rendu-dartiste-dune-planete-avec-deux-planetes-en-arriere-plan-nUsBA0isRyY"],
"sizes" => ["s","M","L","XL"],
"reviews" => [
    ["author"=> "alban","rating"=> 5, "comment"=> "La photo est de bonne qualité"],
    ["author"=> "julie","rating"=> 4, "comment"=> "Belle image mais un peu chère"],
    ]
];
echo '<img src='. $product["images"][1].'/>'."</br>";
echo count($product["sizes"])."</br>";
echo $product["reviews"][0]["comment"];
?>

</body>
</html>
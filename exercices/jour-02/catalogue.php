<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$products = [
["name" => "T-shirt", "price" => 19.99, "stock" => "10"],
["name" => "Pull", "price" => 35, "stock" => "15"],
["name" => "Jean", "price" => 40 , "stock" => "3"],
["name" => "Robe", "price" => 25 , "stock" => "9"],
["name" => "Robe2", "price" => 25 , "stock" => "16"],
];

echo $products[2]["name"]."</br>";
echo $products[0]["price"]."</br>";
echo $products[4]["stock"]."</br>";
$products[1]["price"] = 25;
print_r ($products);

?>

</body>
</html>
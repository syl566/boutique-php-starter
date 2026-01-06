<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>

<?php
$clothes = ["T-shirt", "jean", "pull"];
$accessoires = ["ceintures", "Montre", "Lunettes"];
$catalog = array_merge ($clothes,$accessoires);
print_r($catalog);
array_unshift($catalog,"chemise", "robes");
print_r($catalog);
?>
    
</body>
</html>
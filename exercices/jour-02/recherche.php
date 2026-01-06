<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    
<?php
$categories= array ("vêtements","chaussures", "Accesssoires", "sport");
if (in_array ("chaussures",$categories)){
    echo"Trouvé chaussures";
}
if (in_array ("électronique",$categories)){
    echo"non trouvé électronique";
}
?>

<?php
$categories= array ("vêtements","chaussures", "Accesssoires", "sport");
echo array_search ("sport",$categories);
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

array_search()


</body>
</html>
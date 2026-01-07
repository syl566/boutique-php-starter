<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <?php
    $firstNames = ["Jean", "Ben", "Alice", "Marie", "Paul"];
    $i = 1;

    foreach ($firstNames as $name) {
        echo "<ul><li>$name</li></ul>";
    }
    ?>
    
</body>
</html>
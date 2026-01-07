<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
    $tab = [
    ["name" => "Jean","age" => "56","city" => "Vienne","job" => "Boulanger"] ,
     ["name" => "Ben","age" => "25","city" => "Grenoble","job" => "Courtier"] ,
      ["name" => "Alice","age" => "30","city" => "Colmar","job" => "Dentiste"] ,
       ["name" => "Marie","age" => "34","city" => "Annecy","job" => "Coiffeuse"] ,
        ["name" => "Paul","age" => "22","city" => "Paris","job" => "Concepteur Devellopeur"], 
    ];
           
       foreach($tab as $age){
            echo "</br>";
            foreach($age as $key => $value){
                echo "<strong>$key</strong> : $value"."</br>";
            }
        }
          
    ?>
</body>
</html>
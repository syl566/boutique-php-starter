
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    
  <?php  // switch
$status = "standby". "validated". "shipped" . "delivered" . "canceled";

    switch ($status){
        case "standby": 
            echo "<span style='color: orange'>commande en attente</span>";
            break;
        case "validated":
            echo "<span style='color: green'>commande validée</span>";
            break;
        case "shipped":
            echo "<span style='color: yellow'>Commande délivrée</span>";
            break;
        case "delivered":
            echo "<span style='color: violet'>Commande délivrée</span>";
            break;
        case "canceled":
            echo "<span style='color: red'>Commande annulée</span>";
            break;  
        default:
            echo "AHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH CA NE MARCHE PASSSSSS";
    }          
   ?> 


    
   <?php //match
   $status = 'standby'. "validated". "shipped" . "delivered" . "canceled";
   $return_value = match ($status) {
    'standby' => 'orange',
    'validated' => 'green',
    'shipped' => 'yellow',
    'delivered' => 'violet',
    'canceled' => 'red',
    };
   var_dump($return_value);
   ?>

    
    </body>
</html>

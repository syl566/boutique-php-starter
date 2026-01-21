<?php
// créer 5 objects produit et les stocker dans un tableau

$product1 = new Product("1", "chaussure", "chaussure de sport", 100, 10, "sport");
$product2 = new Product("2", "chemise", "chemise homme", 50, 0, "vetement");
$product3 = new Product("3", "casquette", "casquette de baseball", 25, 5, "accessoire");
$product4 = new Product("4", "gants", "gants de ski", 75, 3, "sport");
$product5 = new Product("5", "pull", "pull en laine", 60, 8, "vetement");

$products = [$product1,  $product2,  $product3,  $product4,  $product5];

class Product
{
    public $products;

    //constructeur
    public function __construct(
        public string $id,
        public string $nom,
        public string $description,
        public float $prix,
        public int $stock,
        public string $category,
    ) {}
    
    //calcule le total du stock et la valeur totale du catatlogue
    public function getValue()
    {
        $totalStock = 0;
        $totalValue = 0;
    }
}
//parcours avec foreach 
foreach ($products as $product) {
    echo $product->nom, "<br>".$product->description, " " .$product->prix, " € <br> " ."stock : ".$product->stock ."<br>";
}
foreach ($products as $product) {
    $totalStock += $product->stock;
    $totalValue += $product->prix * $product->stock;
}
echo "Valeur totale du catalogue : " . $totalValue . "\n";
return $totalStock;

?>
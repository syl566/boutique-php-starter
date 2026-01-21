<?php
$produit = new Product("1", "chaussure", "chaussure de sport", 100, 10, "sport");
$produit1 = new Product("2", "chemise", "chemise homme", 50, 0, "vetement");

$produit->id = "1";
$produit->nom = "chaussure";
$produit->description = "chaussure de sport";
$produit->prix = 100;
$produit->stock = 10;
$produit->category = "sport";

$produit1->id = "2";
$produit1->nom = "chemise";
$produit1->description = "chemise homme";
$produit1->prix = 50;
$produit1->stock = 0;
$produit1->category = "vetement";

class Product
{
    public function __construct(
        public string $id,
        public string $nom,
        public string $description,
        public float $prix,
        public int $stock,
        public string $category,
    ) {}

    //méthodes 
    public function getPriceIncludingTax(float $vat = 20): float
    {
        return $this->prix * (1 + $vat / 100);
    }
    public function isInStock(): bool
    {
        return $this->stock > 0;
    }
    public function reduceStock(int $quantity): void
    {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;
        } else {
            echo "Stock insuffisant.";
        }
    }
    public function applyDiscount(float $percentage): void
    {
        $discountAmount = $this->prix * ($percentage / 100);
        $this->prix -= $discountAmount;
    }
    public function display()
    {
        echo $this->id, $this->nom, $this->description, $this->prix, $this->stock, $this->category . "<br>";
    }
}


//affiche le prix TTC
echo "Prix TTC du produit 1: " . $produit->getPriceIncludingTax() . "<br>";
echo "Prix TTC du produit 2: " . $produit1->getPriceIncludingTax() . "<br>";

//vérifie si le produit est en stock
echo "Le produit 1 est en stock: " . ($produit->isInStock() ? "true" : "false") . "<br>";
echo "Le produit 2 est en stock: " . ($produit1->isInStock() ? "true" : "false") . "<br>";
//réduit le stock
$produit->reduceStock(3);
echo "produit 1 après réduction du stock : " . $produit->stock . "<br>";
//applique une remise
$produit1->applyDiscount(10);
echo "Prix du produit 2 après remise: " . $produit1->prix . "<br>";

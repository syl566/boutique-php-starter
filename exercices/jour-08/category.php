<?php
// propiétés:
class Category
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description,
    ) {}

    public function getSlug()
    {
        return strtolower(str_replace(' ', '-', $this->name));

    }
}
//crée 3 catégories
$category1 = new Category("1", " Sport ", "Articles de sport");
$category2 = new Category("2", " Vêtements ", "Articles vestimentaires");
$category3 = new Category("3", " Accessoires ", "Articles divers");

echo $category1->getSlug();
echo $category2->getslug();
echo $category3->getslug();


?>
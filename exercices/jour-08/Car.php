<?php
// création d'objets de type voiture
$car1 = new Car();
$car2 = new Car();
$car3 = new Car();

//définition des attributs de la car 1
$car1->brand = 'Opel';
$car1->model = 'corsa';
$car1->year = '2024';

//définition des attributs de la car 2
$car2->brand = 'ford';
$car2->model = 'fiesta';
$car2->year = '2025';

//définition des attributs de la car 3
$car3->brand = 'suzuki';
$car3->model = 'swift';
$car3->year = '2023';


class Car
{
    // attributs
    public $brand ;
    public $model ;
    public $year ;

    //méthodes
   
    public function getAge(){
       echo $this->year;
    }
    public function display(){  
    echo $this->brand,$this->model;
    }
}
$car1->getAge();
$car1->display();
$car2->getAge();
$car2->display();
$car3->getAge();
$car3->display();
?>
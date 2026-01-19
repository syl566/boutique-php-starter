<?php
$user = new user('Jhon', 'jhon@exemple.fr', new DateTime('2025-01-15'));

class user
{
    // attributs
    public $name;
    public $email;
    public $registrationDate;

    //methodes
    public function construct($name, $email, $registrationDate)
    {
        echo $this->name = $name . '<br/>';
        echo $this->email = $email . '<br/>';
        echo $this->registrationDate = $registrationDate . '<br/>';
    }
    

    public function isNewNember()
    {
        $date = new DateTime();
        
        if ($this->registrationDate > $date->modify('-30 days')) {
            return true;
        } else {
            return false;
        }
    }
}
$user->construct('Jhon', 'jhon@exemple.fr', new DateTime('2025-01-15'));

?>

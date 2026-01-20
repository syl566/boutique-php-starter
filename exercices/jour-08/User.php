<?php
class user
{    //methodes
    public function __construct(
        public string $name,
        public string $email,
        public DateTime $registrationDate,
    ) {}
    public function displayUser()
    {
        echo "Nom: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo "Date d'inscription: " . $this->registrationDate->format('Y-m-d') . "<br>";
    }

    public function isNewNember()
    {
        $dateJour = new DateTime('now');
        $interval = $this->registrationDate->diff($dateJour);
        if ($interval->days < 30) {
            return true;
        }
    }
}

$user1 = new user('Jhon', 'jhon@exemple.fr', new DateTime('2025-01-15'));
$user2 = new user('Doe', 'doe@exemple.fr', new DateTime('2026-01-15'));

// affiche les informations de l'utilisateur 1
$user1->displayUser();
if ($user1->isNewNember()) {
    echo "L'utilisateur est un nouveau membre.<br>";
} else {
    echo "L'utilisateur n'est pas un nouveau membre.<br>";
}

// affiche les informations de l'utilisateur 2
$user2->displayUser();
if ($user2->isNewNember()) {
    echo "L'utilisateur est un nouveau membre.<br>";
} else {
    echo "L'utilisateur n'est pas un nouveau membre.<br>";
}

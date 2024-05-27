<?php
class Utilisateur
{
    //Propriétés
    public $nom;
    public $prenom;
    public $login;
    public $password;
    public $admin;

    //Constructeur
    public function __construct($nom, $prenom, $login, $password, $admin)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->password = $password;
        $this->admin = $admin;
    }



    
}

?>
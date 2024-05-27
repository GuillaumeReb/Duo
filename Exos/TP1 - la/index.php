<PRE>
<?php
require_once("./Classes/Ordinateur.php");
require_once("./Classes/Imprimante.php");
require_once("./Classes/Utilisateur.php");
$imprimante1 = new Imprimante;

$imprimante1-> nom = "LBP5200";
$imprimante1-> marque = "Canon";
$imprimante1-> modele = "Laser";
$imprimante1-> ppm = 20;

var_dump($imprimante1);

$ordinateur1 = new Ordinateur;
$ordinateur1 -> nom = "Presarion";
$ordinateur1 -> marque = "Compaq";
$ordinateur1 -> frequence = 2000;
$ordinateur1 -> memoire = 4096;
$ordinateur1 -> type = "PC";

var_dump($ordinateur1);

$utilisateur1 = new Utilisateur;
$utilisateur1 -> nom = "nom2";
$utilisateur1 -> prenom = "prenom2";
$utilisateur1 -> login = "login2";
$utilisateur1 -> password ="pwd2";
$utilisateur1 -> admin = true;

var_dump($utilisateur1);
?>

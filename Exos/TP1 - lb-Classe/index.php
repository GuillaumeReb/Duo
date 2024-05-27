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

// $utilisateur1 = new Utilisateur;
// $utilisateur1 -> nom = "nom2";
// $utilisateur1 -> prenom = "prenom2";
// $utilisateur1 -> login = "login2";
// $utilisateur1 -> password ="pwd2";
// $utilisateur1 -> admin = true;

// var_dump($utilisateur1);

//en utilisant le constructeur
$utilisateur2 = new Utilisateur("nom3", "prenom3", "login3", "pwd3", false);
var_dump($utilisateur2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1>Menu</h1>
    <a href="ajoutImprimante.php">Ajout d'une imprimante</a>
    <a href="ajoutOrdinateur.php">Ajout d'un ordinateur</a>
    <a href="ajoutUtilisateur.php">Ajout d'un utilisateur</a>
</body>
</html>
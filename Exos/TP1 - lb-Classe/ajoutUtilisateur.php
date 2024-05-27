<?php
require_once("./Classes/Ordinateur.php");
require_once("./Classes/Imprimante.php");
require_once("./Classes/Utilisateur.php");


$ordinateur = new Ordinateur;

$ordinateur->nom= $_REQUEST['nom'];
$ordinateur->prenom= $_REQUEST['prenom'];
$ordinateur-> login = $_REQUEST['log'];
$ordinateur-> password = $_REQUEST['pwd'];
$ordinateur-> admin = $_REQUEST['admin'];

var_dump($ordinateur);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout utilisateur</title>
</head>
<body>
<h1>Ajout d'un utilisateur</h1>

<form action="" method="POST">

<label for="prenom">Prénom</label>
<input type="text" name="prenom" id="prenom"/>
<br>
<br>
<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" />
<br>
<br>
<label for="type">Login</label>
<input type="text" id="log" name="log">
<br>
<br>
<label for="pwd">Password</label>
<input type="text" id="pwd" name="pwd"></input>
<br>
<br>
<label for="admin">Admin</label>
<input type="checkbox" name="admin" id="admin">
<br>
<br>
<input type="submit" value="Envoyer" />

</form>
<br>
<br>
<a href="index.php">
    <button>Retour</button>
</a>
</body>
</html>
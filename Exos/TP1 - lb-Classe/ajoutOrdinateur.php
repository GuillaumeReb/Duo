<?php
require_once("./Classes/Ordinateur.php");
require_once("./Classes/Imprimante.php");
require_once("./Classes/Utilisateur.php");


$ordinateur = new Ordinateur;

$ordinateur->nom= $_REQUEST['nom'];
$ordinateur->marque= $_REQUEST['marque'];
$ordinateur-> type = $_REQUEST['type'];
$ordinateur-> memoire = $_REQUEST['mem'];
$ordinateur-> frequence = $_REQUEST['freq'];

var_dump($ordinateur);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout ordinateur</title>
</head>
<body>
<h1>Ajout d'ordinateur</h1>

<form action="" method="POST">

<label for="marque">Marque</label>
<input type="text" name="marque" id="marque"/>
<br>
<br>
<label for="nom">Nom</label>
<input type="text" id="nom" name="nom" />
<br>
<br>
<label for="type">Type</label>
<select name="type" id="type">
    <option >PC fixe</option>
    <option >Portable</option>
</select>
<br>
<br>
<label for="mem">Mémoire</label>
<input type="text" id="mem" name="mem"></input>
<br>
<br>
<label for="freq">Fréquence</label>
<input type="text" id="freq" name="freq"></input>
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
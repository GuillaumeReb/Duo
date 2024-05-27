<PRE>
<?php
require_once("./Classes/Ordinateur.php");
require_once("./Classes/Imprimante.php");
require_once("./Classes/Utilisateur.php");


$imprimante = new Imprimante;

$imprimante->nom= $_REQUEST['nom'];
$imprimante->marque= $_REQUEST['marque'];
$imprimante-> modele = $_REQUEST['modele'];
$imprimante-> ppm = $_REQUEST['ppm'];

var_dump($imprimante);

// $nom = $_REQUEST['nom'];
// echo $nom;

// echo 'Nom : '.$_POST["nom"].'<br>';
// echo 'Marque : ' .$_POST["marque"].'<br>';
// echo 'Modèle : ' .$_POST["model"].'<br>';
// echo 'PPM : ' .$_POST["ppm"].'<br>';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout imprimante</title>
</head>
<body>
    <h1>Ajout d'imprimante</h1>

    <form action="" method="POST">
    
    <label for="marque">Marque</label>
    <input type="text" name="marque" id="marque"/>
    
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" />
    
   
    <label for="modele">Model</label>
    <select name="modele" id="modele">
        <option >Laser</option>
        <option >Jet d'encre</option>
    </select>
     
    <label for="ppm">PPM:</label>
    <input type="text" id="ppm" name="ppm"></input>
    
  
    <input type="submit" value="Envoyer" />

    </form>
<br>
<br>
<a href="index.php">
    <button>Retour</button>
</a>
</body>
</html>
<?php
require_once("init.php");


$imprimante = new Imprimante;

$imprimante->nom= $_REQUEST['nom'];
$imprimante->marque= $_REQUEST['marque'];
$imprimante-> modele = $_REQUEST['modele'];
$imprimante-> ppm = $_REQUEST['ppm'];

var_dump($imprimante);

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

    <form action="" method="POST" >
			<table>
				<tr>
					<td>Marque</td>
					<td><input name="marque" type="text"/></td>
				</tr>
				<tr>
					<td>Nom :</td>
					<td><input name="nom" type="text"/></td>
				</tr>
				<tr>
					<td>Modele :</td>
					<td>
						<select name="modele">
							<option>laser</option>
							<option>jet d encre</option>
						</select>				
					</td>
				</tr>
				<tr>
					<td>Ppm :</td>
					<td><input name="ppm" type="text"/></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Envoi"></td>			
					
				</tr>
			</table>
		</form>
	
<br>
<br>
<a href="index.php">
    <button>Retour</button>
</a>
</body>
</html>
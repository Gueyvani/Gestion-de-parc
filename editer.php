<?php

include("connexion.php");
$y=$_GET['x'];
$l=mysqli_query($a,"SELECT * FROM voiture WHERE N°Chassi='$y'");
$r=mysqli_fetch_array($l);

?>
<body text="yellow">
<form action="modifier.php" method="post">
<link rel="stylesheet" href="sib.css">
<p><h1><marquee>FORMULAIRE DE MODIFICATION</marquee></h1></p>
	<table align="center">
		<tr>
			
			<td></td>
			<td>
				<input type="hidden" name="N°Chassi" value="<?=$r['N°Chassi']?>">
			</td>
		</tr>
		<tr>
			
			<td>MARQUE</td>
			<td>
				<input type="text" name="marque" value="<?=$r['marque']?>">
			</td>
		</tr>
		<tr>
			
			<td>MODELE</td>
			<td>
				<input type="text" name="modéle" value="<?=$r['modéle']?>">
			</td>
		</tr>
		<tr>
			
			<td>ANNEE_MISE_EN_CIRCULATION</td>
			<td>
				<input type="number" name="AMC" value="<?=$r['AMC']?>">
			</td>
		</tr>
		<tr>
			
			<td>PRIX AFFICHE</td>
			<td>
				<input type="number" name="prixAffiche" value="<?=$r['prixAffiche']?>">
			</td>
		</tr>
		<tr>
			
			<td>PRIX DE VENTE</td>
			<td>
				<input type="number" name="prixdevente" value="<?=$r['prixdevente']?>">
			</td>
		</tr>
		<tr>
			<td> </td>
			<td>
				<input type="submit" name="ok" value="Modifier">
			</td>
		</tr>
		
		
		
	</table>
</form>
</body>
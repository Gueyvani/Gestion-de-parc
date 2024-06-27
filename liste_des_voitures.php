<table border="1" align="center" width="80%">

	<tr>
		<td>N°CHASSI</td><td>MARQUE</td><td>MODELE</td><td>ANNEE MISE EN CIRCULATION</td><td>PRIX AFFICHE</td><td> PRIX DE VENTE</td><td> BENEFICE</td><td>ACTION</td>
	</tr>
	<?php
		include("connexion.php");
		$af=mysqli_query($a,"SELECT *,N°Chassi FROM voiture order by N°Chassi DESC");
		while($liste=mysqli_fetch_array($af)){
	
	?>
	<tr>
		<td><?php echo 'AA-OO-A'.$liste['N°Chassi'] ?></td>
		<td><?php echo $liste['marque'] ?></td>
		<td><?php echo $liste['modéle'] ?></td>
		<td><?php echo $liste['AMC'] ?></td>
		<td><?php echo $liste['prixAffiche'] ?></td>
		<td><?php echo $liste['prixdevente'] ?></td>
		<td><?php echo $liste['benefice'] ?></td>
		<td><a href="editer.php?x=<?php echo $liste['N°Chassi']; ?>">modifier || </a><a href="supprimer.php?x=<?php echo $liste['N°Chassi']; ?>"> supprimer</a></td>
	</tr>

	

	<?php }?>
</table>
<a href="Formulaire.html"><H4> Retourne sur la formulaire html</h4></a>
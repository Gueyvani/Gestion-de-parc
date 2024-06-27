<?php
// j'importe la connexion à la base de donnée
include("connexion.php");
//je récupere les données de notre formulaire
$N°Chassi=$_POST['N°Chassi'];
$b=$_POST['marque'];
$c=$_POST['modéle'];
$d=$_POST['AMC'];
$i=$_POST['prixAffiche'];
$e=$_POST['prixdevente'];
$bn=$i-$e;


	
$x=mysqli_query($a,"UPDATE `voiture` SET `marque`='$b',`modéle`='$c',`AMC`='$d',`prixAffiche`='$i',`prixdevente`='[$e]',`benefice`='$bn' WHERE `N°Chassi`='$N°Chassi' ");                                                                                                                                               Whe='$i', prixdevente='$e', benefice='$bn' WHERE N°Chassi='$N°Chassi'");


	
header('location:liste_des_voitures.php');

?>
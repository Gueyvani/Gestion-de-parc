<?php
// j'importe la connexion à la base de donnée
include("connexion.php");
//je récupere les données de notre formulaire
$b=$_POST['marque'];
$c=$_POST['modéle'];
$d=$_POST['AMC'];
$e=$_POST['prixdevente'];
if($b=="MERCEDES"&&$c=="MERCEDES.L200")
{
   $i=100000000;
}else
	if($b=="MERCEDES"&&$c=="MERCEDES.AMG")
{
   $i=10000000;
}else
	if($b=="MERCEDES"&&$c=="MERCEDES.GB")
{
   $i=200000000;
}else
	if($b=="BMW"&&$c=="BMW.X4")
{
   $i=9000000;
}else
	if($b=="BMW"&&$c=="BMW.X5")
{
   $i=10000000;
}else
	if($b=="BMW"&&$c=="BMW.X6")
{
   $i=20000000;
}else
	if($b=="BMW"&&$c=="BMW.Xi")
{
   $i=30000000;
}else
	if($b=="TOYOTA"&&$c=="TOYOTA.COROLA S")
{
   $i=1000000;
}else
	if($b=="TOYOTA"&&$c=="TOYOTA.COROLA LE")
{
   $i=2000000;
}else
	if($b=="TOYOTA"&&$c=="BTOYOTA.COROLA SE")
{
   $i=3000000;
}else
	if($b=="AUDI"&&$c=="AUDI.Q5")
{
   $i=200000000;
}else
	if($b=="AUDI"&&$c=="AUDI.Q6")
{
   $i=300000000;
}else
	if($b=="AUDI"&&$c=="AUDI.A4")
{
   $i=400000000;
}else
	if($b=="AUDI"&&$c=="AUDI.A5")
{
   $i=500000000;
}else
	if($b=="LAMBURGINI"&&$c=="LAMBURGINI.AVANATADOR")
{
   $i=1000000000;
}else
	if($b=="LAMBURGINI"&&$c=="LAMBURGINI.GHOST")
{
   $i=2000000000;
}else
	if($b=="LAMBURGINI"&&$c=="LAMBURGINI.URUS")
{
   $i=3000000000;
}else
	if($b=="RANG OVER"&&$c=="RANG OVER.EVOK")
{
   $i=700000000;
}else
	if($b=="RANG OVER"&&$c=="RANG OVER.VELAR")
{
   $i=800000000;
}else
	if($b=="TESLA"&&$c=="TESLA.X")
{
   $i=900000000;
}else
	if($b=="TESLA"&&$c=="TESLA.Xi")
{
   $i=950000000;
}else
	if($b=="CHEVROLET"&&$c=="CHEVROLET.DODG")
{
   $i=950000000;
}else
	if($b=="CHEVROLET"&&$c=="CHEVROLET.DODG.CHARGER")
{
   $i=1000000000;
}

$bn=$i-$e;

$f=mysqli_query($a,"INSERT INTO `voiture` (`marque`, `modéle`, `AMC`, `prixAffiche`, `prixdevente`, `benefice`) VALUES ('$b', '$c', '$d', '$i', '$e', '$bn');");

?>
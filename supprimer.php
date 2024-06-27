<?php
include("connexion.php");

$NChassi= $_GET['x'];

$x=mysqli_query($a,"DELETE FROM `voiture` WHERE N°Chassi='$NChassi'");
:

?>
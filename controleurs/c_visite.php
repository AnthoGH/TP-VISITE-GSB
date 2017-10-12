<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];


switch($action){
	case 'visite':{
			$refVisiteur = $idVisiteur;
			$refPraticien = $_REQUEST['refPraticien'];
			$niveauInteret = $_REQUEST['niveauInteret'];
			$pdo->creeVisite($refVisiteur,$refPraticien,$finDeVisite,$niveauInteret);}break;
		}

include("vues/v_visite.php");

?>
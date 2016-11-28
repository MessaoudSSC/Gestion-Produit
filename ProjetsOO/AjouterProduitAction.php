<?php
	if(!isset($_POST["Nom"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/Produit.php");
	$Nom = $_POST["Nom"];
	$Marque = $_POST["Marque"];
	$Modele = $_POST["Modele"];
	$Prix = $_POST["Prix"];
	$Stock = $_POST["Stock"];

	$Param = array('Nom'=>$Nom,
					'Marque'=>$Marque,
					'Modele'=>$Modele,
					'Prix'=>$Prix,
					'Stock'=>$Stock);

	$ProduitXMLObj = new Produit();
	$Retour= $ProduitXMLObj->Insert($Param);

	
	if($Retour)
		echo "<h1>Produit ".$Retour." inserer avec succée</h1>";
	else
		echo "<h1>Erreur insertion du produit</h1>";
	
	include 'ListeProduitV3.php';
?>
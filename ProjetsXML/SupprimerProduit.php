<?php
	if(!isset($_GET["IdProduit"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/ProduitXML.php");
	$IdProduit = $_GET["IdProduit"];
	$Rq = '<Produit Action="Delete" id="'.$IdProduit.'" />';
	$ProduitXMLObj = new ProduitXML();
	$Rs= $ProduitXMLObj->DeleteXML($Rq);
	$Retour = new SimpleXMLElement($Rs);

	if($Retour['Statut'] == 'Success')
		echo "<h1>Produit ".$Retour['id']." supprimer avec succée</h1>";
	else
		echo "<h1>Erreur Produit ".$Retour['id']." non supprimer</h1>";
	
	include 'ListeProduitV3.php';
?>
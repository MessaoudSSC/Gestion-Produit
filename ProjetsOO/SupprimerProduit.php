<?php
	if(!isset($_GET["IdProduit"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/Produit.php");
	$IdProduit = $_GET["IdProduit"];
	$Param =  array('IdProduit'=>$IdProduit);
	$ProduitObj = new Produit();
	$Retour= $ProduitObj->Delete($Param);

	if($Retour)
		echo "<h1>Produit ".$IdProduit." supprimer avec succée</h1>";
	else
		echo "<h1>Erreur Produit ".$IdProduit." non supprimer</h1>";
	
	include 'ListeProduitV3.php';
?>
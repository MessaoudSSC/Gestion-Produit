<?php
	if(!isset($_POST["IdProduit"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/Produit.php");
	$IdProduit = $_POST["IdProduit"];
	$Nom = $_POST["Nom"];
	$Marque = $_POST["Marque"];
	$Modele = $_POST["Modele"];
	$Prix = $_POST["Prix"];
	$Stock = $_POST["Stock"];
	$Param = array('IdProduit'=>$IdProduit,
					'Nom'=>$Nom,
					'Marque'=>$Marque,
					'Modele'=>$Modele,
					'Prix'=>$Prix,
					'Stock'=>$Stock);
	$ProduitObj = new Produit();
	$Retour= $ProduitObj->Update($Param);
	
	if($Retour)
		echo "<h1>Produit ".$IdProduit." modifier avec succée</h1>";
	else
		echo "<h1>Erreur Produit ".$IdProduit." non modifier</h1>";
	
	include 'ListeProduitV3.php';
?>
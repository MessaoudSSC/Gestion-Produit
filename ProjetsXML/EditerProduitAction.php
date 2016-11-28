<?php
	if(!isset($_POST["IdProduit"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/ProduitXML.php");
	$IdProduit = $_POST["IdProduit"];
	$Nom = $_POST["Nom"];
	$Marque = $_POST["Marque"];
	$Modele = $_POST["Modele"];
	$Prix = $_POST["Prix"];
	$Stock = $_POST["Stock"];
	$Rq = '<Produit Action="Update" id="'.$IdProduit.'">
			<Nom>'.$Nom.'</Nom>
			<Marque>'.$Marque.'</Marque>
			<Modele>'.$Modele.'</Modele>
			<Prix>'.$Prix.'</Prix>
			<Stock>'.$Stock.'</Stock>
		</Produit>';
	$ProduitXMLObj = new ProduitXML();
	$Rs= $ProduitXMLObj->UpdateXML($Rq);
	$Retour = new SimpleXMLElement($Rs);
	
	if($Retour['Statut'] == 'Success')
		echo "<h1>Produit ".$Retour['id']." modifier avec succée</h1>";
	else
		echo "<h1>Erreur Produit ".$Retour['id']." non modifier</h1>";
	
	include 'ListeProduitV3.php';
?>
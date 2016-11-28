<?php
	if(!isset($_POST["Nom"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/ProduitXML.php");
	$Nom = $_POST["Nom"];
	$Marque = $_POST["Marque"];
	$Modele = $_POST["Modele"];
	$Prix = $_POST["Prix"];
	$Stock = $_POST["Stock"];
	$Rq = '<Produit Action="Insert">
			<Nom>'.$Nom.'</Nom>
			<Marque>'.$Marque.'</Marque>
			<Modele>'.$Modele.'</Modele>
			<Prix>'.$Prix.'</Prix>
			<Stock>'.$Stock.'</Stock>
		</Produit>';

	$ProduitXMLObj = new ProduitXML();
	$Rs= $ProduitXMLObj->InsertXML($Rq);
	$Retour = new SimpleXMLElement($Rs);
	
	if($Retour['Statut'] == 'Success')
		echo "<h1>Produit ".$Retour['id']." inserer avec succée</h1>";
	else
		echo "<h1>Erreur insertion du produit</h1>";
	
	include 'ListeProduitV3.php';
?>
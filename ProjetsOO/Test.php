<?php
require_once("Metier/Produit.php");
require_once("Metier/ProduitXML.php");
$ProduitObj = new Produit();
$ProduitXMLObj = new ProduitXML();
var_dump($ProduitXMLObj->ListeXML());
echo '<hr /> Ajout produit<hr />';
$Produit = array('Nom' => 'Prod ', 'Marque' => 'Marque', 'Modele' => 'Modele', 'Stock' => 1000, 'Prix' => 2010);
$Ajout = $ProduitObj->Insert($Produit);
var_dump($Ajout);

echo '<hr /> Update produit<hr />';
$Produit = array('IdProduit' => 5,'Nom' => 'PC 5 ', 'Marque' => 'M5', 'Modele' => 'M55', 'Stock' => 55, 'Prix' => 555);

$Update = $ProduitObj->Update($Produit);
var_dump($Update);

echo '<hr /> get produit<hr />';
$Produit = array('IdProduit' => 2);
$Retour = $ProduitObj->Get($Produit);
var_dump($Retour);


echo '<hr /> Delete produit<hr />';
$Produit = array('IdProduit' => 5);
$Delete = $ProduitObj->Delete($Produit);
var_dump($Delete);


echo '<hr /> Liste produit<hr />';
$liste = $ProduitObj->liste();
var_dump($liste);
?>
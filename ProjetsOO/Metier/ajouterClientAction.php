<?php
if(!isset($_POST["Nom"])){
    include 'ListeProduitV3.php';
    exit;
}
require_once("Metier/Client.php");
$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];

$Param = array('Nom'=>$Nom,
    'Prenom'=>$Prenom,);


$ClientXMLObj = new Client();
$Retour= $ClientXMLObj->Insert($Param);


if($Retour)
    echo "<h1>Client ".$Retour." inserer avec succée</h1>";
else
    echo "<h1>Erreur insertion du produit</h1>";

include 'ListeProduitV3.php';
?>
<?php
if(!isset($_GET["Requete"]) and !isset($_POST["Requete"])){
	$Reponse = '<Produit Statut="Failure">
					<Erreur>Acation non définie</Erreur>
				</Produit>';
	echo $Reponse;
	exit;
}

if(isset($_POST["Requete"]))
	$Requete = $_POST["Requete"];
else
	$Requete = $_GET["Requete"];

$Param = new SimpleXMLElement($Requete);
require_once 'Metier/ProduitXML.php';
$Prod = new ProduitXML();
$Action = $Param["Action"];
switch ($Action) {
    case 'Liste':
        $Reponse = $Prod->ListeXML();
        break;    
	case 'Insert':
        $Reponse = $Prod->InsertXML($Requete);
        break;   
	case 'Update':
        $Reponse = $Prod->UpdateXML($Requete);
        break;  
	case 'Delete':
        $Reponse = $Prod->DeleteXML($Requete);
        break;
}
echo $Reponse;
?>
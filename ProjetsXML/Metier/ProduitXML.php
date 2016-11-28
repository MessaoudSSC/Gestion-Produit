<?php
require_once("Metier/Produit.php");
class ProduitXML extends Produit{
	public function ListeXML(){
		$Retour = '<Produits>';
		$Produits = $this->Liste();
				
		foreach($Produits as $Produit)			
			$Retour .= '<Produit id="'.$Produit["IdProduit"].'">
							<Nom>'.$Produit["Nom"].'</Nom>
							<Marque>'.$Produit["Marque"].'</Marque>
							<Modele>'.$Produit["Modele"].'</Modele>
							<Prix>'.$Produit["Prix"].'</Prix>
							<Stock>'.$Produit["Stock"].'</Stock>
						</Produit>';
		
		$Retour .= '</Produits>';
		return $Retour;
	}
	
	public function InsertXML($Rq){
		
		$Param = new SimpleXMLElement($Rq);
		$Produit = array('Nom' =>$Param->Nom,
						'Marque' =>$Param->Marque,
						'Modele' =>$Param->Modele,
						'Prix' =>$Param->Prix,
						'Stock' =>$Param->Stock);
		
		$Retour = $this->Insert($Produit);
		
		if($Retour)
			$Statut = 'Success';
		else
			$Statut = 'Failure';
			
		$Reponse = '<Produit Action="Insert" id="'.$Retour.'" Statut="'.$Statut.'" />';
		
		return $Reponse;
	}
	
	public function UpdateXML($Rq){
		
		$Param = new SimpleXMLElement($Rq);
		$Produit = array('IdProduit' =>$Param["id"],
						'Nom' =>$Param->Nom,
						'Marque' =>$Param->Marque,
						'Modele' =>$Param->Modele,
						'Prix' =>$Param->Prix,
						'Stock' =>$Param->Stock);
		
		$Retour = $this->Update($Produit);
		
		if($Retour)
			$Statut = 'Success';
		else
			$Statut = 'Failure';
			
		$Reponse = '<Produit Action="Update" id="'.$Param["id"].'" Statut="'.$Statut.'" />';
		
		return $Reponse;
	}
	
	public function DeleteXML($Rq){
		$Param = new SimpleXMLElement($Rq);
		$Produit = array('IdProduit' =>$Param["id"]);		
		$Retour = $this->Delete($Produit);
		if($Retour)
			$Statut = 'Success';
		else
			$Statut = 'Failure';
			
		$Reponse = '<Produit Action="Delete" id="'.$Param["id"].'" Statut="'.$Statut.'" />';
		return $Reponse;
	}
	
	public function GetXML($Rq){
		
		$Param = new SimpleXMLElement($Rq);
		$Tab = array('IdProduit' =>$Param["id"]);		
		$Produit = $this->Get($Tab);
		
		$Reponse = '<Produit id="'.$Produit["IdProduit"].'">
							<Nom>'.$Produit["Nom"].'</Nom>
							<Marque>'.$Produit["Marque"].'</Marque>
							<Modele>'.$Produit["Modele"].'</Modele>
							<Prix>'.$Produit["Prix"].'</Prix>
							<Stock>'.$Produit["Stock"].'</Stock>
						</Produit>';
		return $Reponse;
	}
	
	
}

?>
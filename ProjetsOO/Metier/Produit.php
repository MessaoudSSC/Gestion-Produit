<?php
require_once("Metier/DataBase.php");
class Produit extends DataBase{
	public function Liste(){
		$Retour = array();
		$Produits = $this->Conex->query('select IdProduit, Nom, Marque, Modele, Stock, Prix from produit');
				
		while($Produit = $Produits->fetch())			
			array_push($Retour, $Produit);
		
		return $Retour;
	}
	public function Insert($Produit){
		
		$Rq = $this->Conex->prepare('INSERT INTO `produit` (`IdProduit`, `nom`, `marque`, `modele`, `stock`, `prix`) VALUES (NULL, :Nom, :Marque, :Modele, :Stock, :Prix);');
		
		$Retour = $Rq->execute($Produit);
		
		if($Retour)
			return $this->Conex->lastInsertId();
		else 
			return $Retour;
	}
	
	public function Update($Produit){
		
		$Rq = $this->Conex->prepare('UPDATE `produit` SET `nom`=:Nom,`marque`=:Marque,`modele`=:Modele,`stock`=:Stock,`prix`=:Prix WHERE `IdProduit`=:IdProduit');
		
		$Retour = $Rq->execute($Produit);
		
		return $Retour;
	}
	
	public function Delete($Produit){
		
		$Rq = $this->Conex->prepare('DELETE FROM `produit` WHERE `IdProduit`=:IdProduit');
		
		$Retour = $Rq->execute($Produit);
		
		return $Retour;
	}
	
	public function Get($Produit){
		
		$Rq = $this->Conex->prepare('select IdProduit, Nom, Marque, Modele, Stock, Prix from produit WHERE `IdProduit`=:IdProduit');
		
		$Retour = $Rq->execute($Produit);
		
		return $Rq->fetch();
	}
	
	
}

?>
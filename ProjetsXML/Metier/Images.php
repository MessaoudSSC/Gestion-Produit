<?php
require_once("Metier/DataBase.php");
class Image extends DataBase{
	public function Liste($Param){
		$Retour = array();
		$Rq = $this->Conex->prepare('select IdImage, Titre, URL from Image where IdProduit=:IdProduit');
		$Images = $Rq->execute($Param);	
		while($Images = $Images->fetch())			
			array_push($Retour, $Image);
		
		return $Retour;
	}
	public function Insert($Image){
		
		$Rq = $this->Conex->prepare('INSERT INTO `Image` (`IdImage`, `IdProduit`, `Titre`, `URL`) VALUES (NULL, :IdProduit, :Titre, :URL);');
		
		$Retour = $Rq->execute($Image);
		
		if($Retour)
			return $this->Conex->lastInsertId();
		else 
			return $Retour;
	}
	
	public function Update($Image){
		
		$Rq = $this->Conex->prepare('UPDATE `Image` SET `IdProduit` =:IdProduit, `Titre`=:Titre, `URL`=:URL WHERE `IdImage`=:IdImage');
		
		$Retour = $Rq->execute($Image);
		
		return $Retour;
	}
	
	public function Delete($Image){
		
		$Rq = $this->Conex->prepare('DELETE FROM `Image` WHERE `IdImage`=:IdImage');
		
		$Retour = $Rq->execute($Image);
		
		return $Retour;
	}
	
	public function Get($Image){
		
		$Rq = $this->Conex->prepare('select `IdImage`, `IdProduit`, `Titre`, `URL` from Image WHERE `IdImage`=:IdImage');
		
		$Retour = $Rq->execute($Image);
		
		return $Rq->fetch();
	}
	
	
}

?>
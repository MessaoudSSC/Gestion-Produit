<?php
require_once("Metier/DataBase.php");
class Produit extends DataBase{
    public function Liste(){
        $Retour = array();
        $Client = $this->Conex->query('select IdClient, Nom, Prenom from client');

        while($Client = $Client->fetch())
            array_push($Retour, $Client);

        return $Retour;
    }
    public function Insert($Client){

        $Rq = $this->Conex->prepare('INSERT INTO `client` (`IdClient`, `Nom`, `Prenom`) VALUES (NULL, :Nom, :Prenom);');

        $Retour = $Rq->execute($Client);

        if($Retour)
            return $this->Conex->lastInsertId();
        else
            return $Retour;
    }

    public function Update($Client){

        $Rq = $this->Conex->prepare('UPDATE `client` SET `Nom`=:Nom,`Prenom`=:Prenom WHERE `IdClient`=:IdClient');

        $Retour = $Rq->execute($Client);

        return $Retour;
    }

    public function Delete($Client){

        $Rq = $this->Conex->prepare('DELETE FROM `produit` WHERE `IdProduit`=:IdClient');

        $Retour = $Rq->execute($Client);

        return $Retour;
    }

    public function Get($Client){

        $Rq = $this->Conex->prepare('select IClient, Nom, Prenom from produit WHERE `IdClient`=:IClient');

        $Retour = $Rq->execute($Client);

        return $Rq->fetch();
    }


}

?>
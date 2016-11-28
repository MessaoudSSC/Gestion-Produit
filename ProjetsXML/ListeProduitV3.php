<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Liste des produits avec appel XML </title>
	</head>
	<body>
		<br />
		<a href="AjouterProduit.php">Ajouter un produit</a>
		<br /><br /><br />
		<table>
			<tr>
				<th>Id Produit</th>
				<th>Nom</th>
				<th>Marque</th>
				<th>Modéle</th>
				<th>Prix</th>
				<th>Stock</th>
				<th>Editer</th>
				<th>Supprimer</th>
			</tr>
			<?php
				require_once("Metier/ProduitXML.php");
				$ProduitXMLObj = new ProduitXML();
				$XML= $ProduitXMLObj->ListeXML();
				$Produits = new SimpleXMLElement($XML);
				foreach($Produits as $Produit)
				{ ?>
				<tr>
					<td><?php echo $Produit["id"];?></td>
					<td><?php echo $Produit->Nom;?></td>
					<td><?php echo $Produit->Marque;?></td>
					<td><?php echo $Produit->Modele;?></td>
					<td><?php echo $Produit->Prix;?></td>
					<td><?php echo $Produit->Stock;?></td>
					<td><a href="EditerProduit.php?IdProduit=<?php echo $Produit["id"];?>">Editer</a></td>
					<td><a href="SupprimerProduit.php?IdProduit=<?php echo $Produit["id"];?>">Supprimer</a></td>
				</tr>				
			<?php
				}
			
			?>
		</table>
	</body>
</html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Liste des produits avec appel XML </title>
	</head>
	<body>
		<br />
		<a href="AjouterProduit.php">Ajouter un produit</a>

		<a href="ajouterclient.php">Ajouter un Client</a>
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
				require_once("Metier/Produit.php");
				$ProduitXMLObj = new Produit();
				$Produits= $ProduitXMLObj->Liste();
				foreach($Produits as $Produit)
				{ ?>
				<tr>
					<td><?php echo $Produit["IdProduit"];?></td>
					<td><?php echo $Produit["Nom"];?></td>
					<td><?php echo $Produit["Marque"];?></td>
					<td><?php echo $Produit["Modele"];?></td>
					<td><?php echo $Produit["Prix"];?></td>
					<td><?php echo $Produit["Stock"];?></td>
					<td><a href="EditerProduit.php?IdProduit=<?php echo $Produit["IdProduit"];?>">Editer</a></td>
					<td><a href="SupprimerProduit.php?IdProduit=<?php echo $Produit["IdProduit"];?>">Supprimer</a></td>
				</tr>				
			<?php
				}
			
			?>
		</table>
	</body>
</html>
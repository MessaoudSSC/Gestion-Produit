<?php
	if(!isset($_GET["IdProduit"])){
		include 'ListeProduitV3.php';
		exit;
	}
	require_once("Metier/Produit.php");
	$IdProduit = $_GET["IdProduit"];
	$Param = array('IdProduit'=>$IdProduit);
	$ProduitObj = new Produit();
	$Produit= $ProduitObj->Get($Param);
?>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Liste des produits avec appel XML </title>
	</head>
	<body>
		<form method="post" action="EditerProduitAction.php">
		<input type="hidden" name="IdProduit" value="<?php echo $Produit["IdProduit"];?>" />
			<table>	
				<tr>
					<th colspan="2">Editer produit</th>
				</tr>
				<tr>
					<th>Nom</th>
					<td><input type="text" name="Nom" value="<?php echo $Produit["Nom"];?>" /></td>
				</tr>	
				<tr>
					<th>Marque</th>
					<td><input type="text" name="Marque" value="<?php echo $Produit["Marque"];?>" /></td>
				</tr>	
				<tr>
					<th>Modéle</th>
					<td><input type="text" name="Modele" value="<?php echo $Produit["Modele"];?>" /></td>
				</tr>	
				<tr>
					<th>prix</th>
					<td><input type="text" name="Prix" value="<?php echo $Produit["Prix"];?>" /></td>
				</tr>
				<tr>
					<th>Stock</th>
					<td><input type="text" name="Stock" value="<?php echo $Produit["Stock"];?>" /></td>
				</tr>
				<tr>
					<th><a href="ListeProduitV3.php">Retour</a></th>
					<td><input type="Submit" value="Envoyer" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/style.css" />
		<title>Liste des produits avec appel XML </title>
	</head>
	<body>
		<form method="post" action="AjouterProduitAction.php">
			<table>	
				<tr>
					<th colspan="2">Ajouter produit</th>
				</tr>
				<tr>
					<th>Nom</th>
					<td><input type="text" name="Nom" value="" /></td>
				</tr>	
				<tr>
					<th>Marque</th>
					<td><input type="text" name="Marque" value="" /></td>
				</tr>	
				<tr>
					<th>Modéle</th>
					<td><input type="text" name="Modele" value="" /></td>
				</tr>	
				<tr>
					<th>prix</th>
					<td><input type="text" name="Prix" value="" /></td>
				</tr>
				<tr>
					<th>Stock</th>
					<td><input type="text" name="Stock" value="" /></td>
				</tr>
				<tr>
					<th><a href="ListeProduitV3.php">Retour</a></th>
					<td><input type="Submit" value="Envoyer" /></td>
				</tr>
			</table>
		</form>
	</body>
</html>
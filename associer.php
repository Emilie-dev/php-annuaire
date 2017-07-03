<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Associer</title>
</head>
<body>

	<h2>Ajouter un contact :</h2>

	<form action="associer.php" method="post">
		<label for="lastName">Nom :</label>
		<input type="text" name="lastName">
		<label for="firstName">Prénom :</label>
		<input type="text" name="firstName">
		<label for="company">Entreprise :</label>
		<input type="text" name="company">
		<label for="birthDate">Date de naissance :</label>
		<input type="text" name="birthDate">
		<label for="address">Adresse :</label>
		<input type="text" name="address">
		<label for="phone">Téléphone :</label>
		<input  type="text" name="phone">

		<h2>Ajouter un groupe :</h2>
		<label for="patate">patate</label>
		<input type="checkbox" value="patate">
		<label for="chouquette">chouquette</label>
		<input type="checkbox" value="chouquette">
		<label for="pomme">pomme</label>
		<input type="checkbox" value="pomme">
		<label for="chocolat">chocolat</label>
		<input type="checkbox" value="chocolat">
		
		<input type="submit" value="Valider">
	</form>

</body>
</html>


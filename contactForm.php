<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ContactForm</title>
</head>
<body>

	<h2>Formulaire de saisie de contact</h2>

	<form action="contactTable.php" method="post">

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

		<h2>Groupes :</h2>
		<label for="patate">patate</label>
		<input type="checkbox" name="grp[]" value="2">
		<label for="chocolat">chocolat</label>
		<input type="checkbox" name="grp[]" value="8">
		<label for="pomme">pomme</label>
		<input type="checkbox" name="grp[]" value="9">
		<label for="chouquette">chouquette</label>
		<input type="checkbox" name="grp[]" value="10">


		<input type="submit" value="Valider">
		

	</form>

</body>
</html>
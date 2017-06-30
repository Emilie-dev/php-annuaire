<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
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
		<input type="submit" value="Valider">
		

	</form>

</body>
</html>
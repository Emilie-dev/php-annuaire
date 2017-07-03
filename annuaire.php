<?php

//-- Database connexion

try  
{
    $bdd = new PDO(
    	'mysql:host=localhost;dbname=Lala;charset=utf8', 
    	'Lala', 
    	'ZDYMu3Zb9eNTz3L8'
    );
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM contact_annuaire');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Annuaire</title>
</head>
<body>

	<h2>Annuaire :</h2>

	<table>
		<thead>
			<tr>
				<th>Nom :</th>
				<th>Prénom :</th>
				<th>Entreprise :</th>
				<th>Date de naissance :</th>
				<th>Adresse :</th>
				<th>Téléphone :</th>
			</tr>
		</thead>
		<tbody>
<?php
while ($donnees = $reponse -> fetch()) {
	
  		echo '<tr><td>'.$donnees['lastName'].'</td><td>'.$donnees['firstName'].'</td><td>'.$donnees['company'].'</td><td>'.$donnees['birthDate'].'</td><td>'.$donnees['address'].'</td><td>'.$donnees['phone'].'</td></tr>';
}

?>

		</tbody>
	</table>	
</body>
</html>
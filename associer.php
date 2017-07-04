<?php
try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=Lala;charset=utf8', 'Lala', 'ZDYMu3Zb9eNTz3L8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>contactTable</title>
</head>
<body>
	<div class="container">
		<h2>Tableau de contact</h2>	
		<table>
			<thead>
				<tr>
					<th>Nom :</th>
					<th>Prénom :</th>
					<th>Entreprise :</th>
					<th>Date de naissance :</th>
					<th>Adresse :</th>
					<th>Téléphone :</th>
					<th>Groupe :</th>
				</tr>
			</thead>
			<tbody>
<?php


$reponse = $bdd->query('SELECT * FROM associer
	INNER JOIN contact_annuaire ON associer.fk_contact = contact_annuaire.id
	INNER JOIN groupe_contact ON associer.fk_groupe = groupe_contact.id');

while ($donnees = $reponse -> fetch()) {
	
  		echo '<tr><td>'.$donnees['lastName'].'</td><td>'.$donnees['firstName'].'</td><td>'.$donnees['company'].'</td><td>'.$donnees['birthDate'].'</td><td>'.$donnees['address'].'</td><td>'.$donnees['phone'].'</td><td>'.$donnees['groupe'].'</td></tr>';
}
var_dump($donnees['lastName']);
?>
			</tbody>
		</table>
	</div>

	<div class="container">
		<h2>Groupes :</h2>

		<table>
			<thead>
				<tr>
					<th>id</th>
					<th>groupe</th>
				</tr>
			</thead>
			<tbody>
<?php

$reponse = $bdd->query('SELECT * FROM groupe_contact');

while($donnees = $reponse->fetch()) {
	echo '<tr><td>'.$donnees['id_groupe'].'</td><td>'.$donnees['name_groupe'].'</td></tr>';
}

?>




			</tbody>
		</table>




	</div>


</body>
</html> 
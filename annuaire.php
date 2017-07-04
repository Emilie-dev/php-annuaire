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


$nom = $_POST['lastName'];
$prenom = $_POST['firstName'];
$entreprise = $_POST['company'];
$dateDeNaissance = $_POST['birthDate'];
$adresse = $_POST['address'];
$telephone = $_POST['phone'];
$groupe = $_POST['groupe'];


$req = $bdd->prepare('INSERT INTO associer
	JOIN contact_annuaire ON associer.fk_contact = contact_annuaire.id
	JOIN groupe_contact ON associer.fk_groupe = groupe_contact.id');


$req->execute(array(
	'lastName' => $nom,
	'firstName' => $prenom,
	'company' => $entreprise,
	'birthDate' => $dateDeNaissance,
	'address' => $adresse,
	'phone' => $telephone
));

$id = $bdd->lastInsertId();



while ($donnees = $reponse -> fetch()) {
	
  		echo '<tr><td>'.$donnees['lastName'].'</td><td>'.$donnees['firstName'].'</td><td>'.$donnees['company'].'</td><td>'.$donnees['birthDate'].'</td><td>'.$donnees['address'].'</td><td>'.$donnees['phone'].'</td><td>'.$donnees['groupe'].'</td></tr>';
}





?>

		</tbody>
	</table>	
</body>
</html>
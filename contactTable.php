<?php
// on se connecte à la base de donnée
try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=Lala;charset=utf8', 'Lala', 'ZDYMu3Zb9eNTz3L8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
	
// on récupére le contenu des inputs
$nom = $_POST['lastName'];
$prenom = $_POST['firstName'];
$entreprise = $_POST['company'];
$dateDeNaissance = $_POST['birthDate'];
$adresse = $_POST['address'];
$telephone = $_POST['phone'];
$groupe = $_POST['grp'];

// on vérifie que les inputs ne soient pas vides
if (!empty($_POST['lastName']) && !empty($_POST['firstName']) && !empty($_POST['company']) && !empty($_POST['birthDate']) && !empty($_POST['address']) && !empty($_POST['phone'])) {

	echo 'Votre saisie a bien été sauvegardé';

// on envoie le contenu des inputs dans la table
$req = $bdd -> prepare ('INSERT INTO contact_annuaire (lastName, firstName, company, birthDate, address, phone)
VALUES (:lastName, :firstName, :company, :birthDate, :address, :phone)');
$req->execute(array(
	'lastName' => $nom,
	'firstName' => $prenom,
	'company' => $entreprise,
	'birthDate' => $dateDeNaissance,
	'address' => $adresse,
	'phone' => $telephone
	)); 

} else {
	echo 'Erreur, veuillez remplir le formulaire :(';
}


$id = $bdd->lastInsertId();

$req  = $bdd->prepare('INSERT INTO associer (fk_contact, fk_groupe)
	                   VALUES (:id, :groupe)');

foreach ($groupe as $value) {
	$req->execute([
		'id'=>$id,
		'groupe'=>$value
	]);
}
// var_dump($id);
// var_dump($groupe);

// j'affiche le contenu de la table dans un tableau HTML
?>
<!DOCTYPE html>
<html>
<head>
	<title>contactTable</title>
</head>
<body>
	<div class="container">
		<h2>Tableau de contact par groupe</h2>	
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

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=Lala;charset=utf8', 'Lala', 'ZDYMu3Zb9eNTz3L8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM associer 
	INNER JOIN contact_annuaire ON associer.fk_contact = contact_annuaire.id
	INNER JOIN groupe_contact ON associer.fk_groupe = groupe_contact.id
	');


while ($donnees=$reponse-> fetch()) {
	
  		echo '<tr><td>'.$donnees['lastName'].'</td><td>'.$donnees['firstName'].'</td><td>'.$donnees['company'].'</td><td>'.$donnees['birthDate'].'</td><td>'.$donnees['address'].'</td><td>'.$donnees['phone'].'</td><td>'.$donnees['groupe'].'</td></tr>';
}

// var_dump($donnees);
?>

</body>
</html> 
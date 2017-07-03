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

//$reponse = $bdd->query('SELECT * FROM groupe_contact');

//-- Saving the group

//print_r( $_POST );

$groupe = $_POST['groupe'];

if( ! empty($_POST['groupe'])) {

	$req = $bdd->prepare('
		INSERT INTO groupe_contact(groupe)
		VALUES (:groupe);
	');

	$req->execute(array(
		'groupe' => $groupe
	));

	//print_r( $bdd->errorInfo() );
	echo "Enregistrement effectué avec succès :)";

} else {
	echo "Erreur lors de l'enregistrement :(";
}


/*
var_dump($req);		
while($donnees = $reponse->fetch()) {

	echo '<script>alert("Votre saisie a bien été enregistrée !");</script>';

	echo 'Nouveau groupe : '.$donnees['groupe']; 
}
*/

?>
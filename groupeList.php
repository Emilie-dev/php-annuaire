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


$reponse = $bdd->query('SELECT * FROM groupe_contact');


	echo "<h2>Liste des groupes :</h2>";

while($donnees = $reponse->fetch()) {

	echo '<ul><li>'.$donnees['groupe'].'</li></ul>'; 
}



?>
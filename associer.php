<?php

// supprimer un contact

// database connexion
try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=Lala;charset=utf8', 'Lala', 'ZDYMu3Zb9eNTz3L8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM contact_annuaire');


$bdd->exec('DELETE FROM contact_annuaire WHERE nom = id_contact');
?>
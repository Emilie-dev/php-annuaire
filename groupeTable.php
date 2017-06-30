<?php

try  
{
    $bdd = new PDO('mysql:host=localhost;dbname=Lala;charset=utf8', 'Lala', 'ZDYMu3Zb9eNTz3L8');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM groupe_contact');


?>
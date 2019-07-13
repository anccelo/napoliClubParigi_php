<?php
// Connexion à la base de données
try
{
        
        $bdd = new PDO('mysql:host=ftp.napoliclubparigi.fr;dbname=databasename;charset=utf8', 'norealuser', 'norealpassword');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
<?php

// Afficher le nombre d'étudiants dans la table

/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// Préparer la requête
$requete = $connexion -> prepare("SELECT COUNT(*) AS nbEtudiants FROM etudiant ");

// Exécuter la requête
$requete -> execute();

// Récupérer le résultat
//$resultat = $requete->fetch(PDO::FETCH_ASSOC);
//echo "Il y a " .$resultat['nbEtudiants']. " étudiants.";

$resultat = $requete -> fetchColumn();  //fetchColumn renvoie juste la colonne utile
print_r($resultat).PHP_EOL;
echo "Il y a " .$resultat. " étudiants.";
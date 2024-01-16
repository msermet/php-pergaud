<?php

/**
 * @var PDO $connexion
 */
require "config/db-config.php";

// Préparer la requête
$requete = $connexion->prepare("SELECT * FROM etudiant WHERE id_etudiant = :id");
// Donner une valeur au paramètre
$requete->bindValue(":id",2);
// Exécuter la requête
$requete->execute();
// Récupérer le résultat
$etudiant = $requete->fetch(PDO::FETCH_ASSOC);
// $etudiant est un tableau associatif correspondant à l'enregistrement recherché
// Affichage du résultat
print_r($etudiant);
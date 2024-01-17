<?php

/**
 * @var PDO $connexion
 */
require "config/db-config.php";
$idEtudiant=intval(readline("Entrez un id : "));

// Préparer la requête
$requete = $connexion->prepare("SELECT * FROM etudiant WHERE id_etudiant = :id");

// Donner une valeur au paramètre
//$requete->bindValue(":id",$idEtudiant);

// Exécuter la requête
$requete->execute([
    ":id" => $idEtudiant
]);

// Récupérer le résultat
$etudiant = $requete->fetch(PDO::FETCH_ASSOC);

//// Test si l'étudiant existe
if ($etudiant) {
    // $etudiant est un tableau associatif correspondant à l'enregistrement recherché
    // Affichage du résultat
    print_r($etudiant);
} else {
    echo "L'étudiant recherché n'existe pas.";
}

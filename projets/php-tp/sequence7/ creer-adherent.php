<?php

/**
 * @var PDO $connexion
 */
require "config/db-lister-emprunts-adherent-config.php";

$nomAdherent=readline("Saisir le nom du nouvel adhérent : ");
$prenomAdherent=readline("Saisir le nom du nouvel adhérent : ");
$emailAdherent=readline("Saisir l'email du nouvel adhérent : ");

// Préparer la requête
$requete = $connexion -> prepare("INSERT INTO adherent (nom,prenom,email)
                                        VALUES (:nomAdherent,:prenomAdherent,:emailAdhrent)");


// Exécuter la requête
$requete->execute([
    ":nomAdherent"=>$nomAdherent,
    ":prenomAdherent"=>$prenomAdherent,
    ":emailAdhrent"=>$emailAdherent
]);

// Récupérer le résultat
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);

print_r($resultats);

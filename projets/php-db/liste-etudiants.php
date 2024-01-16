<?php

/**
 * @var PDO $connexion // ce qui permet juste d'enlever l'erreur sur la variable $connexion. L'éditeur php ne connaît pas $connexion vu qu'elle a été créée dans db-config.php mais le programme fonctionne quand même.
 */
require "config/db-config.php";

// 1. Exécution de la requête
// 1.1 Préparation de la requête
$requete=$connexion->prepare("SELECT prenom_etudiant,nom_etudiant FROM etudiant ORDER BY nom_etudiant");
// 1.2 Exécution de la requête (envoie de la requête)
$requete->execute();
// 2. Récupération des enregistrements
//$requete->setFetchMode();
$resultats = $requete->fetchAll(PDO::FETCH_ASSOC);
// 3. Affichage des résultats
foreach ($resultats as $resultat) {
    // $resultat : tableau associatif représentant un enregistrement
    echo $resultat["prenom_etudiant"]." ".
        $resultat["nom_etudiant"].PHP_EOL;
}
<?php

// Définir les informations de connexion
const DB_HOST = "localhost:3306";
const DB_NAME = "db_intro";
const DB_USER = "root";
const DB_PASSWORD = "";

// Utiliser PDO pour créer une connexion à la DB (base de données)
$connexion = new PDO(dsn:"mysql:host=".DB_HOST.";dbname=".DB_NAME,username:DB_USER,password:DB_PASSWORD);

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
<?php

// Déclarer et initialiser un tableau de notes
// Clé = nom de l'étudiant
// Valeur = note de l'étudiant
$notes=[
    "dupond" => 12,
    "martin" => 16,
    "durand" => 7,
    "JEAN" => 10
];

// Ajouter une nouvelle note (15) pour l'étudiant Petit
$notes["petit"] = 15;
print_r($notes);

// Modifier la note de l'étudiant Petit
$notes["petit"] = 10;
print_r($notes);

// Afficher l'ensemble des notes
foreach ($notes as $note) {
    echo "$note ";
}
echo PHP_EOL;

// Afficher le nom de chaque étudiant avec sa note
foreach ($notes as $nom=>$note) {
    echo "$nom : $note".PHP_EOL;
}
echo PHP_EOL;

// Afficher les noms des étudiants avec seulement la première lettre en majuscule
foreach ($notes as $nom=>$note) {
    $nom=ucfirst(strtolower($nom));
    echo "$nom : $note".PHP_EOL;
}
echo PHP_EOL;

// Afficher le nom de chaque étudiant (ensemble des clés)
// array_keys permet de récupérer la clé dans un tableau associatif
foreach (array_keys($notes) as $nom) {
    $nom=ucfirst(strtolower($nom));
    echo "$nom ";
}
echo PHP_EOL;

// Supprimer l'élément dont la clé est JEAN
unset($notes["JEAN"]);
print_r($notes);
echo PHP_EOL;

// Calculer et afficher la moyenne des notes
// Version 1
if (count($notes)>0) {
    $somme=0;
    foreach ($notes as $note) {
        $somme+=$note;
    }
    $moyenne=$somme/count($notes);
    echo $moyenne;
}
echo PHP_EOL;

// Version 2
// empty vérifie si le tableau est vide donc !empty vérifie si le tableau n'est pas vide
if (!empty($notes)) {
    $moyenne=array_sum($notes)/count($notes);
    echo round($moyenne,2);
}
echo PHP_EOL;

// Afficher la liste des étudiants triés par ordre alphabétique
$noms = array_keys($notes);
rsort($noms);    // Trier les valeurs d'un tableau associatif
print_r($noms);
echo PHP_EOL;

// Rechercher et afficher la meilleure note
// Version 1
if (count($notes)>0) {
    $meilleureNote=0;
    foreach ($notes as $note) {
        if ($note>$meilleureNote) {
            $meilleureNote=$note;
        }
    }
    echo $meilleureNote;
}
echo PHP_EOL;

// Version 2
$noteMax=max($notes);
echo $noteMax;
echo PHP_EOL;

// Rechercher et afficher les noms des étudiants ayant une note >= 10
// Si la liste est vide, afficher un message spécifique
// La recherche...
$noms = [];
foreach ($notes as $nom=>$note) {
    if ($note>=10) {
        $noms[]=$nom;
    }
}
// L'affichage...
if (empty($noms)) {
    echo "La liste est vide ...";
} else {
    sort($noms);
    foreach ($noms as $nom) {
        echo $nom.PHP_EOL;
    }
}
<?php

$livre="Les Misérables:Victor Hugo:1862:Roman historique:978-0-679-60129-2";

// 1. Extraire et afficher les informations du livre
// Utiliser la fonction explode
$livreTab=explode(":",$livre);
foreach ($livreTab as $info) {
    echo $info." ";
}
echo PHP_EOL;

// 2. Utiliser la fonction list()
list($titre,$auteur,$datePublication,$genre,$isbn)=explode(":",$livre);
echo "$titre $auteur $datePublication $genre $isbn";
echo PHP_EOL;

// Exemple
// $notes=[12,5,9];
// list($note1,$note2,$note3)=$notes;
// echo $note1;

// 3. Utiliser le destructuring (à partir de PHP 7.1)
[$titre,$auteur,$datePublication,$genre,$isbn]=explode(":",$livre);
echo "$titre $auteur $datePublication $genre $isbn";
echo PHP_EOL;

// 4. Afficher le titre et l'année de publication
$livreTab=explode(":",$livre);
echo "$livreTab[0] $livreTab[2]";
echo PHP_EOL;

// Utiliser list()
list($titre,,$datePublication)=explode(":",$livre);
echo "$titre $datePublication";
echo PHP_EOL;

// Utiliser le destructuring
[$titre,,$datePublication]=explode(":",$livre);
echo "$titre $datePublication";
echo PHP_EOL;

// Afficher l'auteur du livre
[,$auteur]=explode(":",$livre);
echo "$auteur";
echo PHP_EOL;

// Afficher l'ISBN du livre
[,,,,$isbn]=explode(":",$livre);
echo "$isbn";
echo PHP_EOL;
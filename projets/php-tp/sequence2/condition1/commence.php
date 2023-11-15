<?php
//Demander la saisie d'un mot à l'utilisateur
//Afficher si le mot commence par la lettre p

$mot=readline("Saississez un mot : ");
$mot=strtolower($mot);
if (str_starts_with($mot,"p")) {            //ou if (str_starts_with(strtolower($mot),"p")) {
    echo "Le mot commence par p.";
} else {
    echo "Le mot ne commence pas par p";
}


//Afficher si le mot contient plus de 5 lettres (inclus)
echo PHP_EOL;
if (strlen($mot) >= 5) {
    echo "Le mot contient au moins 5 lettres.";
} else {
    echo "Le mot contient moins de 5 lettres.";
}
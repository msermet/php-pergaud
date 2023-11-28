<?php

// Définir une fonction qui affiche "Bonjour"
function direBonjour() : void {
    echo "Bonjour".PHP_EOL;
}

// Appeler la fonction afin de l'exécuter
direBonjour();

// Définir une fonction qui affiche "Bonjour $nom"
// La fonction a un paramètre : le nom
function direBonjourNom(string $prenom) : void {
    // $nom est une variable locale à la fonction
    echo "Bonjour $prenom".PHP_EOL;
}

// Appeler la fonction afin de l'exécuter
direBonjourNom("Phong");
$prenom="Maxime";
direBonjourNom($prenom);
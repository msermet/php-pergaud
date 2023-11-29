<?php

require 'cours-fonctions.php';

$prenom=readline("Saisissez votre prénom : ");
$nom=readline("Saisissez votre nom : ");

echo retourneIdentite($prenom,$nom);
<?php

$prenom = readline('Saisir votre prénom : ');
$nom = readline('Saisir votre nom : ');
$initialesPrenom=$prenom[0];
$initialesNom=$nom[0];
echo strtoupper("Vos initiales sont: $initialesPrenom$initialesNom");
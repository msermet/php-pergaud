<?php

$prenom = readline('Saisir votre prénom : ');
$nom = readline('Saisir votre nom : ');
$nbAleatoire=rand(0,10);
echo "Votre adresse mail est $prenom.$nom$nbAleatoire@societe.com";
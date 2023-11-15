<?php

$montantEmprunt = (int)readline("Saisir le montant à emprunter : ");
$tauxInteret= floor(readline("Saisir le taux d'intérêt (%): "));
$dureeEnAnnee = (int)readline("Saisir la durée (en année) : ");
$mensualite=(($montantEmprunt*($tauxInteret/100))/12)/(1-(1+(($tauxInteret/100)/12))**-($dureeEnAnnee*12));
echo "Le coût à rembourser est de ".round($mensualite,2)." euros.";
$total=$mensualite*($dureeEnAnnee*12);
$aRembourser=$total-$montantEmprunt;
echo PHP_EOL;
echo "Le coût de l'emprunt est de ".round($aRembourser,0 )." euros.";

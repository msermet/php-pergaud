<?php

$prixHT = readline('Saisir un prix HT : ');
$tauxTVA = readline('Saisir un taux de TVA (en pourcentage) : ');
$prixTTC=($prixHT/100)*($tauxTVA+100);
echo "Le prix TTC est de : $prixTTC";
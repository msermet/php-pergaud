<?php

$eau=1.20;
$soda=3;
$cafe=2;

echo "Distributeur de Boissons :
1. Eau – 1,20€ 
2. Soda - 3€
3. Café - 2€";
echo PHP_EOL;

$choix=readline("Veuillez sélectionner une boisson (1, 2, ou 3) : ");

while ($choix!=1 && $choix!=2 && $choix!=3) {
    echo "Sélection invalide. Veuillez choisir 1, 2, ou 3.";
    echo PHP_EOL;
    $choix=readline("Veuillez sélectionner une boisson (1, 2, ou 3) : ");
}

if ($choix==1) {
    $prixAPayer=$eau;
    $rend=readline("Veuillez insérer de l'argent. Il vous reste à payer ".$prixAPayer."€ : ");
    $prixAPayer=$prixAPayer-$rend;
} elseif ($choix==2) {
    $prixAPayer=$soda;
    $rend=readline("Veuillez insérer de l'argent. Il vous reste à payer ".$prixAPayer."€ : ");
    $prixAPayer=$prixAPayer-$rend;
} else {
    $prixAPayer=$cafe;
    $rend=readline("Veuillez insérer de l'argent. Il vous reste à payer ".$prixAPayer."€ : ");
    $prixAPayer=$prixAPayer-$rend;
}

while ($prixAPayer > 0) {
    $rend = readline("Veuillez insérer de l'argent. Il vous reste à payer " . $prixAPayer . "€ : ");
    $prixAPayer = $prixAPayer - $rend;
}

if ($prixAPayer<0) {
    $prixAPayer=$prixAPayer*-1;
    echo "Voici votre monnaie : $prixAPayer ";
}

echo PHP_EOL;
echo "Voici votre boisson. Merci !";


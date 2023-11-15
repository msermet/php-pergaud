<?php

$prixUtilisateur=readline("Saisir le prix de l'article : ");
if ($prixUtilisateur<1000) {
    $nouveauPrix=$prixUtilisateur*0.95;
    $argentRemise=$prixUtilisateur-$nouveauPrix;
    echo "La remise est de 5% soit ".number_format($argentRemise, 2, ',', ' ')." euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de ".number_format($nouveauPrix, 2, ',', ' ')." euros";
} elseif ($prixUtilisateur>=5000) {
    $nouveauPrix=$prixUtilisateur*0.80;
    $argentRemise=$prixUtilisateur-$nouveauPrix;
    echo "La remise est de 5% soit ".number_format($argentRemise, 2, ',', ' ')." euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de ".number_format($nouveauPrix, 2, ',', ' ')." euros";
} else {
    $nouveauPrix=$prixUtilisateur*0.95;
    $argentRemise=$prixUtilisateur-$nouveauPrix;
    echo "La remise est de 5% soit ".number_format($argentRemise, 2, ',', ' ')." euros sur le prix de l'article";
    echo PHP_EOL;
    echo "Le montant de l'article après remise est de ".number_format($argentRemise, 2, ',', ' ')." euros";
}
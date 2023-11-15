<?php

$age=readline("Saisir votre âge : ");
$sexe=readline("Saisir votre sexe (M ou F) : ");

if (strtoupper($sexe)=="M" && $age>22) {
    echo "Vous payez la surprime";
} elseif (strtoupper($sexe)=="F" && $age>=20 && $age<30) {
    echo "Vous payez la surprime";
} else {
    echo "Vous ne payez pas la surprime";
}
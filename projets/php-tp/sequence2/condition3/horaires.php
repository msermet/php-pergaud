<?php

$heureUtilisateur=readline("Saisir une heure (hh:mm) : ");
$heures=substr("$heureUtilisateur",0,2);
if ($heures>="09" && $heures<12) {
    echo "Le magasin est ouvert";
} elseif ($heures>=14 && $heures<19) {
        echo "Le magasin est ouvert";
} else {
    echo "Le magasin est fermé";
}
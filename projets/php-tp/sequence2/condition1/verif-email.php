<?php

$emailUtilisateur=readline("Saisissez votre adresse email: ");
if (strpos($emailUtilisateur,".@gmail.com")) {                  // strpos permet de vérifier si un valeur est bien présente dans une variable
    echo "L'adresse email $emailUtilisateur n'est pas valide";
} else {
    echo "L'adresse email $emailUtilisateur est valide";
}

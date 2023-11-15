<?php

$temperature=readline("Saisir une température : ");
$echelle=readline("Choisir l'échelle entre 'C' et 'F' : ");

if (is_numeric($temperature)<>"True" && ) {
 exit ("Erreur de saisie, la température n'est pas un nombre");
}
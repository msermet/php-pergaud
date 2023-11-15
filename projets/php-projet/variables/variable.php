<?php
// Déclarer et initialiser une variable contenant le prénom d'une personne
$prenom="Louis";
echo $prenom;
$prenomPersonne="Louis"; // Notation CamelCase
echo PHP_EOL;
// Modification de la variable $prenom
$prenom="Andy";
echo $prenom;
//Déclarer et initialiser une variable contenant le résultat de 5 + 8
$addition=5+8;
echo PHP_EOL;
echo $addition;
echo PHP_EOL;
// Concaténation de chaines : utilisation de l'opérateur .
echo "Mon prénom est ".$prenom;
$prenom="Daniel";
echo PHP_EOL;
// Concaténation de chaines : utilisation de l'interpolation
echo "Mon prénom est $prenom";
echo PHP_EOL;
// L'interpolation ne peut pas se faire avec '' mais il faut ""
echo 'Mon prénom est $prenom';
echo PHP_EOL;
$presentation="Mon prénom est $prenom";
$presentation="Mon prénom est ".$prenom;
echo $presentation;
echo PHP_EOL;
// On utilise \ pour annuler l'efficacité de ' dans un mot
echo 'Bonjour je m\'appelle Maxime';
